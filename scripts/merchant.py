#!/usr/bin/python

#this script is to generate the merchant information
#contact_id_fk,category_id_fk, last_update

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

total = len(sys.argv)

count = 0
in_str = str(sys.argv[1])
count = int(in_str)

l_contact = 9500
l_category = 5

i=0
r_contact = 0
while i < count:
    #First Name Last Name
    while(True):
        r_contact =  random.randint(1,l_contact-1)
        sql_test = "SELECT 1 from `tbl_contact` WHERE `contact_id` = \'%d\'" % (r_contact)
        if(cur.execute(sql_test) > 0):
            break
        
    #category
    r_category =  random.randint(1,l_category)

    #last_update
    now = datetime.datetime.now()
    update_time = now.strftime("%Y-%m-%d %X")


    #Sql
    sql = "INSERT IGNORE INTO `tbl_merchant` (`contact_id_fk`, `category_id_fk`, `last_update`) \
          VALUES (\"%d\", \"%d\", \"%s\")" % \
          (r_contact,r_category,update_time) + ";"
    print sql
    i += 1
