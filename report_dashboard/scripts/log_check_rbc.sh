#!/bin/sh
script_home=/var/www/html/report_dashboard/scripts
dat_WF=`date '+%m%d%Y'`
for file_list in `cat $script_home/rbclist.txt | awk -F"." '{print $1}'| awk -F"_" '{print $3"_"$4"*"$5"*"$2}'`
do

       echo "Logs of $file_list"
       echo "------------------"
       #grep -i "exception" /opt/kettle/8.1_yodreport/logs/*${file_list}*${dat_WF}*.log

       success=`grep -i "Uploaded" /home/dkumar4/RBC_PROD/test.txt`
#       exception=`grep -i "exception" /opt/kettle/8.1_yodreport/logs/*${file_list}*${dat_WF}*.log`
       echo "$success " >>jp.txt

       if [ -z "$success" ];then
            echo "SFTP check : no success"
	    echo "$file_list Exception : $exception"
       else
            echo "SFTP check : success"
       fi


done
