#!/bin/bash
cob=$1
date=`date '+%d%m%Y'`
tmpfile="/tmp/report_cron_sftp_$cob_$date"
if [ -e "$tmpfile" ]
then
echo "Already Triggered"
else
touch /tmp/report_cron_sftp_$cob_$date
/usr/bin/perl /home/reporter/sendevent_ssl.pl -h 172.17.54.71 -p 15501 -e "u_objectname=$cob;u_instance=Report Status;u_application=$cob REPORTS - SFTP upload failure;u_severity=1;u_category=Custom Monitoring;u_message=CRITICAL- http://172.17.15.222/report_dashboard/home.php;u_score=40;u_component=REPORTS;u_subcategory=Reports Monitoring;u_userdefined2=$cob REPORTS - SFTP reports upload failure;u_userdefined1=http://172.17.15.222/report_dashboard/home.php;u_environment=Production"  --disable-https
/usr/bin/perl /home/reporter/sendevent_ssl.pl -h 172.17.54.72 -p 15501 -e "u_objectname=$cob;u_instance=Report Status;u_application=$cob REPORTS - SFTP upload failure;u_severity=1;u_category=Custom Monitoring;u_message=CRITICAL- http://172.17.15.222/report_dashboard/home.php;u_score=40;u_component=REPORTS;u_subcategory=Reports Monitoring;u_userdefined2=$cob REPORTS - SFTP reports upload failure;u_userdefined1=http://172.17.15.222/report_dashboard/home.php;u_environment=Production"  --disable-https
fi
