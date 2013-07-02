#!/usr/bin/python

#this script is to insert the city, zip code and longitudes and latitudes

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
#print "Reading the cities file\n"

file_zip = open('./US.txt','rw')

total = len(sys.argv)

count = 0
state = 1
lines = file_zip.readlines()
total = len(lines)
#print total
for line in lines:
    cols = line.split("\t")
    #print len(cols)
    if cols[3] == "California" :
        #print cols[1] + "\t" + cols[2] + "\t" + cols[4] + "\t" + cols[9] + "\t" + cols[10]
        sql = "INSERT IGNORE INTO `tbl_zipcode` (`city_id_fk`, `zip_code` ,`state_id_fk`, `latitude`," + " `longitude`)\
        VALUES ((SELECT `city_id` FROM `tbl_city` WHERE `name` = \'%s\') , %d, %d, %f, %f)" % \
    (cols[2], int(cols[1]), state,float(cols[9]), float(cols[10])) + ";"
        print sql
        count = count + 1
        #cur.execute(sql)

#print "total lines" + str(count) + "\n"
    
    
#INSERT INTO user (name)
#     VALUES ('John Smith');
#INSERT INTO user_details (id, weight, height)
#     VALUES (SELECT(id FROM user WHERE name='John Smith'), 83, 185);
