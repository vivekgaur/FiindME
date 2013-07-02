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

lines = file_zip.readlines()
total = len(lines)
#print total
country = 1
state = 1
for line in lines:
    cols = line.split("\t")
    if cols[3] == "California" :
        sql = "INSERT IGNORE INTO `tbl_zipcode` (`zip_code`, `city_id_fk` , `state_id_fk`,`latitude`, `longitude`)\
        VALUES (\"%s\", %d ,%d)" % \
        (cols[2], state, country) + ";"
        print sql
        count = count + 1
        #cur.execute(sql)

print "total lines" + str(count) + "\n"
    
    
