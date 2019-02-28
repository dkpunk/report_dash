import pysnow
from datetime import date,timedelta
import datetime
import json
import csv
import re
import requests
import sys
#yesterday=datetime.datetime.today()-datetime.timedelta(1)
#today=datetime.datetime.today()
yesterday=datetime.datetime.utcnow()-datetime.timedelta(1)
today=datetime.datetime.utcnow()
my_regex1='Ops - SRE'+"*"
cob_id=sys.argv[1]
#print yesterday
#print today
cobrand_to_incidents={}
incident_list=['25','7','8']
qb=(
#       pysnow.QueryBuilder().field('sys_created_on').between(yesterday,today).AND().field('incident_state').equals('1')
        pysnow.QueryBuilder().field('sys_updated_on').between(yesterday,today).OR().field('sys_created_on').between(yesterday,today).OR().field('u_reopen_at').between(yesterday,today).AND().field('incident_state').not_equals(incident_list).AND().field('u_operations_cobrand_id').contains(cob_id)
        )
'''
file1=open('/var/www/html/panorama/incidents/incidents.csv','w')
csv.register_dialect('myDialect',quoting=csv.QUOTE_ALL)
writer=csv.writer(file1,dialect='myDialect')
writer.writerow(['IncidentNumber','CobrandName','CobrandID','AssignmentGroup','AssignedTo','EventComponent','Description','URL','Severity'])
'''
c=pysnow.Client(instance='yodlee',user='Panorama',password='Panorama')
incident=c.resource(api_path='/table/incident')
ass_obj=c.resource(api_path='/table/u_cobrand')
response=incident.get(query=qb)
outstr=""
outstr1=""
for record in response.all():
#        print "sys_created_on---"+record['sys_created_on']
#        print "sys_updated_on----"+record['sys_updated_on']
#        print "u_reopen_at------"+record['u_reopen_at']
#       if(record['sys_created_on']):
        if(record['sys_updated_on']):
              # print "INCIDENT NUMBER -->"+record['number']
		outstr=outstr+"|"+record['number']
		outstr1=outstr1+"<a target=\"_blank\" href=\"https://yodlee.service-now.com/nav_to.do?uri=%2Fincident.do%3Fsys_id%3D{0}\">{1}</a><br>".format(str(record['sys_id']),record['number'])
		
                #print record.keys()
 #               print "Component -->"+record['u_event_component']
 #               response_a=requests.get('https://yodlee.service-now.com/api/now/table/sys_user_group/'+str(record['assignment_group']['value']),auth=('Panorama','Panorama'))
 #               dict_a=json.loads(response_a.text)
    #            print "Assingment group -->"
 #               print dict_a["result"]["name"]
 #               print "Description -->"+record["short_description"]
 #               ticket_url='https://yodlee.service-now.com/nav_to.do?uri=%2Fincident.do%3Fsys_id%3D'+record['sys_id']
                sys_ids=record['u_operations_cobrand_id']
		#print "COBRAND ID-->"+sys_ids.replace(" ","")
        #       print type(sys_ids)
               #print "COBRAND ID-->"+sys_ids.replace(" ","")
  #              print "SEVERITY -->"+record['u_ops_severity']
 #               print "INCIDENT STATE -->"+record['incident_state']
  #              empty_val=""
  #              ticketlist=[record['number'],empty_val,sys_ids.replace(" ",""),dict_a["result"]["name"],empty_val,record['u_event_component'],record["short_description"],ticket_url,record['u_ops_severity']]
   #             print ticketlist
 #               if((re.search(my_regex1,dict_a["result"]["name"],re.IGNORECASE))):
 #                       writer.writerow(ticketlist)
#			print "COBRAND ID-->"+sys_ids.replace(" ","")
#			print "INCIDENT NUMBER -->"+record['number']
#print(json.dumps(cobrand_to_incidents,indent=2))
#file1.close()
if(outstr1==""):
	print "NA"
else:
	print outstr1
