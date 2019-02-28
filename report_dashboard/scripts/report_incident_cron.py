import requests
import json
import re
import os
import csv
from collections import Counter
import datetime
import subprocess
now=datetime.datetime.now()
print str(now)
filename='/var/www/html/report_dashboard/scripts/Dashboard_output'
logname='/var/www/html/report_dashboard/scripts/incident_cron.log'
def create_sftp_incident(cob_name):
	out1 = subprocess.Popen(['sh', '/var/www/html/report_dashboard/scripts/incident_creator_sftp.sh',cob_name],stdout=subprocess.PIPE,stderr=subprocess.STDOUT)	
	out,err = out1.communicate()
	print str(fields[0])+" INCIDENT OUT:"+str(out)+" ERROR:"+str(err)
        logf.write(str(now)+" : "+cob_name+" INCIDENT OUT:"+str(out)+" ERROR:"+str(err)+"\n")
	return
def create_exception_incident(cob_name):
	out1 = subprocess.Popen(['sh', '/var/www/html/report_dashboard/scripts/incident_creator_sftp.sh',cob_name],stdout=subprocess.PIPE,stderr=subprocess.STDOUT)
        out,err = out1.communicate()
	print str(fields[0])+" INCIDENT OUT:"+str(out)+" ERROR:"+str(err)
        logf.write(str(now)+" : "+cob_name+" INCIDENT OUT:"+str(out)+" ERROR:"+str(err)+"\n")
        return


logf=open(logname,'a')
with open(filename, 'r') as csvfile:
    csvreader = csv.reader(csvfile)
    for fields in csvreader:
        if(fields):
		if(fields[4]=='SUCCESS'):
			logf.write(str(now)+" "+str(fields[0])+" : "+"Success"+"\n")			
			#create_sftp_incident(str(fields[0]))
			continue
		if(fields[0]=='ABMU'):
			if((now.hour >= 00 and now.minute >= 10) or (now.hour <= 05 and now.minute <= 00)):
				print "Waiting for ABMU"
				logf.write(str(now)+" : Waiting for "+str(fields[0])+"\n")
			else:
				print "ABMU Failed"
				logf.write(str(now)+" : "+str(fields[4])+" for "+str(fields[0])+"\n")
				create_sftp_incident(str(fields[0]))
			
		elif(fields[0]=='CITI'):
			if((now.hour >= 14 and now.minute >= 02) or (now.hour <= 16 and now.minute <= 00)):
				print "Waiting for CITI"
				logf.write(str(now)+" : Waiting for "+str(fields[0])+"\n")
			else:
				print "CITI failed"
				logf.write(str(now)+" : "+str(fields[4])+" for "+str(fields[0])+"\n")
				create_sftp_incident(str(fields[0]))	
		elif(fields[0]=='RBC'):
			if((now.hour >= 00 and now.minute >= 10) or (now.hour <= 05 and now.minute <= 00)):
	                        print "Waiting  for RBC"
				logf.write(str(now)+" : Waiting for "+str(fields[0])+"\n")
			else:
				print "RBC failed"
				logf.write(str(now)+" : "+str(fields[4])+" for "+str(fields[0])+"\n")
				create_sftp_incident(str(fields[0]))
		elif(fields[0]=='TIAA'):
			if((now.hour >= 00 and now.minute >= 10) or (now.hour <= 05 and now.minute <= 00)):
	                        print "Waiting for TIAA"
				logf.write(str(now)+" : Waiting for "+str(fields[0])+"\n")
			else:
				print "TIAA failed"
				logf.write(str(now)+" : "+str(fields[4])+" for "+str(fields[0])+"\n")
				create_sftp_incident(str(fields[0]))
		elif(fields[0]=='WELLS_FARGO'):
			if((now.hour >= 00 and now.minute >= 05) or (now.hour <= 04 and now.minute <= 00)):
	                        print "Waiting for WELLS_FARGO"
				logf.write(str(now)+" : Waiting for "+str(fields[0])+"\n")
			else:
				print "WELLS_FARGO failed"
				logf.write(str(now)+" : "+str(fields[4])+" for "+str(fields[0])+"\n")
				create_sftp_incident(str(fields[0]))
logf.close()
