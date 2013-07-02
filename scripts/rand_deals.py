#!/usr/bin/python

#this script is to generate the random deals for testing.

import sys
import random
import datetime

#print "Reading the cities file\n"

file_c = open('./cities.txt','rw')

l_types = ["Auto","Food","Beauty"]

l_time = ["Am","Pm"]

#print file_c

total = len(sys.argv)

count = 0
city = []
if total == 2:
    in_str = str(sys.argv[1])
    count = int(in_str)
for line in file_c:
    city.append(line.strip())
    
l_city = len(city) - 1
i = 0
while i < count:
    r_city = random.randint(0,l_city-1)
    city_str = city[r_city]
    r_type = random.randint(0,len(l_types)-1)
    type_str = l_types[r_type]
    disc_str = str(random.randrange(5,25,5))
    disc_str += "% Off On your final Bill"
    now = datetime.datetime.now()
    r_exp = random.randint(0,12)
    cr_time = now.strftime("%Y-%m-%d %X")
    exp_time = now + datetime.timedelta(0,3600*r_exp)
    cr_user_id = 2;
    #print cr_time
    ex_time = exp_time.strftime("%Y-%m-%d %X")
    sql =  "INSERT INTO `tbl_deals` (`title`, `description`, `City`, `create_time`," + "\n" + " `create_user_id`, `expire_time`)\
    VALUES (\"%s\", \"%s\", \"%s\", \"%s\", %d, \"%s\")" % \
    (type_str, disc_str, city_str, cr_time, cr_user_id, ex_time) + ";" 
    print sql
    i+=1
    
