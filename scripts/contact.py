#!/usr/bin/python

#this script is to generate the contact information
#first_name,last_name,address_id_fk,contact_phone_id_fk,cell_phone_id_fk

import sys
import random
import datetime
import MySQLdb as mdb
import datetime

try:
    conn = mdb.connect("localhost","root","MeriMot1","fiindme_test")

except mdb.Error, e:
    print "Error %d: %s" % (e.args[0], e.args[1])
    sys.exit(1)

cur = conn.cursor()

file_name = open("fakeNames.csv","rw")

total = len(sys.argv)

name_lines = file_name.readlines()

count = 0
in_str = str(sys.argv[1])
count = int(in_str)

first_names = []
last_names = []
all_names = []
l_address = 8000
l_contact_phone = 10000
l_cell_phone = 12000

for line in name_lines :
    tmp = line.strip('\n')
    names = tmp.split(" ")
    first_names.append(names[0])
    last_names.append(names[1].strip("\r"))
    all_names.append(names[0])
    all_names.append(names[1].strip("\r"))

    
#print first_names
#print last_names
l_names = len(all_names)


i = 0

while i < count:
    #First Name Last Name
    r_first_name =  random.randint(0,l_names-1)
    r_last_name =  random.randint(0,l_names-1)

    first_name = all_names[r_first_name]
    last_name = all_names[r_last_name]
    i += 1
    #print first_name + " " +last_name

    #Addres Id
    address_id_fk = random.randint(2,l_address-1)

    #Contact_phone_id
    contact_phone_id_fk = random.randint(3,l_contact_phone-1)

    #Cell_phone_id
    cell_phone_id_fk = random.randint(3,l_cell_phone-1)

    #Sql
    sql = "INSERT IGNORE INTO `tbl_contact` (`first_name`, `last_name`, `address_id_fk`, `contact_phone_id_fk`, `cell_phone_id_fk`) \
          VALUES (\"%s\", \"%s\", \"%d\", \"%d\", \"%d\")" % \
          (first_name,last_name,address_id_fk,contact_phone_id_fk,cell_phone_id_fk) + ";"
    print sql      
