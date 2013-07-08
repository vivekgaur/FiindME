#!/usr/bin/python

#this script is to insert the city, zip code and longitudes and latitudes

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

file_city = open("cities.txt","rw")
file_street = open("street_names.txt","rw")
total = len(sys.argv)

city_lines = file_city.readlines()
street_lines = file_street.readlines()
count = 0
city = []
street = []
l_city = 0

#list of input city strings
input_city = []
zip_id = {}

#dictionary to contain zip and city
city_zip = {}
city_id = {}

for line in city_lines :
    l_city += 1
    tmp = line.strip('\n')
    city_names = tmp.split("\t")
    input_city.append(city_names[0])
    #print city_names[0]
    sql = "SELECT `city_id` from `tbl_city` WHERE `name` = \'%s\'" % (city_names[0])
    #print sql
    cur.execute(sql)
    data = cur.fetchall()
    for row in data:
        row_id = int(row[0])
        #print row_id
        city_id[city_names[0]] = row_id
        city.append(row_id)
        sql2 = "SELECT `zip_code` from `tbl_zipcode` WHERE `city_id_fk` = \'%d\'" % (row_id)
        #print sql2
        cur.execute(sql2)
        data2 = cur.fetchall()
        ziplist = []
        for row2 in data2:
            #print "%d" % (row2)
            ziplist.append(row2)
            row2_id = int(row2[0])
            sql_zip = "SELECT `zipcode_id` from `tbl_zipcode` WHERE `zip_code` = \'%d\'" % (row2_id)
            #print sql_zip
            cur.execute(sql_zip)
            data3 = cur.fetchall()            
            for row3 in data3:
                row3_id = int(row3[0])
                #print row3_id
                zip_id[row2_id] = row3_id
        city_zip[city_names[0]] = ziplist
    
for line in street_lines:
    tmp1 = line.strip("\n")
    street_names = tmp1
    #print street_names
    street.append(street_names)

#print city_zip
#print "Total Streets: %d " % (len(street))
#print "Total Cities: %d " % (len(city))

file_business = open("fakeBusiness.txt","rw")
business = []
street_add = []
for line in file_business:
    tmp2 = line.strip("\n")
    row3 = tmp2.split("|")
    business.append(row3[0])
    street.append(row3[1])

#print business
#print street
#print city_id
l_business = len(business)
l_street = len(street)
l_phone = 20000
l_zip = 0
l_city = len(city)



count = 0
in_str = str(sys.argv[1])
count = int(in_str)
#print city_id
i = 0
while i < count:
    #get City
    r_city = random.randint(0,l_city-1)
    city_str = input_city[r_city]
    
    #get City Id
    #print city_str
    city_id_fk = city_id[city_str]
    state_id_fk = 1
    country_id_fk = 1

    #get Zip Code Id
    l_zip = len(city_zip[city_str])
    r_zip = random.randint(0,l_zip-1)
    zip_code = int(city_zip[city_str][r_zip][0])
    zip_code_fk = int(zip_id[zip_code])
    
    #update time
    now = datetime.datetime.now()
    update_time = now.strftime("%Y-%m-%d %X")

    #Company
    r_business = random.randint(0,l_business-1)
    company = business[r_business]

    #address_line_1
    r_add_line = random.randint(0,l_street-1)
    address_line_1 = street[r_add_line]

    #Sql
    sql = "INSERT IGNORE INTO `tbl_address` (`company`, `address_line_1`, `city_id_fk`, `state_id_fk`, `zip_code_id_fk`,`country_id_fk` , `last_update`) \
          VALUES (\"%s\", \"%s\", \"%d\", \"%d\", \"%d\", \"%d\" , \"%s\")" % \
          (company,address_line_1,city_id_fk,state_id_fk,zip_code_fk,country_id_fk,update_time) + ";"
    print sql      
    i += 1
    
