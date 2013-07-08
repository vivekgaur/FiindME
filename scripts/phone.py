#!/usr/bin/python

#this script is to generate the random phone numbers

import sys
import random
import datetime
import MySQLdb as mdb

try:
    conn = mdb.connect("localhost","root","MeriMot1","fiindme_test")

except mdb.Error, e:
    print "Error %d: %s" % (e.args[0], e.args[1])
    sys.exit(1)

cur = conn.cursor()


#print "Reading the areacodes file\n"

file_c = open('./areacodes.txt','rw')

total = len(sys.argv)

count = 0
code = []
if total == 2:
    in_str = str(sys.argv[1])
    count = int(in_str)

    
for line in file_c:
    code.append(line.strip())

l_code = len(code) - 1
i = 0

while i < count:
    country_code = 1;
    r_area_code = random.randint(0,l_code)
    area_code = int(code[r_area_code])

    r_exchange_code = random.randint(200,900);
    r_phone = random.randint(2000,9000);
    number = int(str(r_exchange_code) + str(r_phone))

    phone = "%d (%d) %d" % (country_code,area_code,number)

    sql = "INSERT IGNORE INTO `tbl_phone` (`country_code`,`area_code`,`number`)\
          VALUES(%d , %d, %d)" % (country_code,area_code,number) + ";"
    #cur.execute(sql)
    print sql

    #print phone
    i += 1
    
