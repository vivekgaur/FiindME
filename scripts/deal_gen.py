#!/usr/bin/python

#this script is to generate random deals
#merchant_id_fk, title, description,create_time, last_update,start_time,end_time,quantity,discount

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

#Numder of deals to generate
count = 0
in_str = str(sys.argv[1])
count = int(in_str)

l_contact = 9500
l_category = 5
l_merchant = 4900

i=0
r_merchant = 0

while i < count:
    #Merchant Id
    while(True):
        r_merchant =  random.randint(1,l_merchant)
        sql_merchant = "SELECT 1 from `tbl_merchant` WHERE `merchant_id` = \'%d\'" % (r_merchant)
        if(cur.execute(sql_merchant) > 0):
            break

    
    #Title and Discount
    str_discount =  str(random.randrange(5,25,5))
    discount = int(str_discount)
    title = str_discount + "% Off On your final Bill"
    description = title + " at your local favortie place."

    #create_time and last_update
    now = datetime.datetime.now()
    last_update = now.strftime("%Y-%m-%d %X")
    create_time = last_update

    #start_time and end_time
    r_exp = random.randint(0,12)
    start_t = now + datetime.timedelta(0,3600*r_exp)
    end_t = start_t + datetime.timedelta(0,3600*2)
    start_time = start_t.strftime("%Y-%m-%d %X")
    end_time = end_t.strftime("%Y-%m-%d %X")

    #Quantity
    quantity = random.randint(1,5)

    #status
    status = "Available"

    
    #Sql
    sql = "INSERT IGNORE INTO `tbl_deal` (`merchant_id_fk`, `title`, `description`,`create_time`,`last_update`,`start_time`,`end_time`,`quantity`,`status`,`discount`) \
          VALUES (\"%d\", \"%s\", \"%s\" ,\"%s\",\"%s\" ,\"%s\",\"%s\",\"%d\",\"%s\",\"%d\")" % \
          (r_merchant,title,description,create_time,last_update,start_time,end_time,quantity,status,discount) + ";"
    print sql
    i += 1
