#!/bin/bash
cobrand_group=$1
column_name=$2
filename='/var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/PROD_DASH/'$1"_stat_prod.txt"
lockfile="/tmp/MQ_"$1".lck"
if [ -f "$lockfile" ]
then
	echo "Please try in sometime"
else
`touch $lockfile`
output=`cat $filename | cut -d ":" -f 1 --output-delimiter=' ' | tr '\n' ' '`
#echo "$output"
instance_list=( "$output" )
#echo $instance_list
for instance in $instance_list; do
	manager=`cat $filename | grep $instance |cut -d ":" -f 3 --output-delimiter=' '`
	#if [ -z "$instance" ] || [ -z "$manager" ] || [ -z "$cobrand_group" ];then
	#echo "Instance,Manager"
	#echo $instance,$manager
	affected_cob=`/bin/sh /var/www/html/SO/SO/UN_DASHBOARD/statd/strings_execute.sh $instance $manager $column_name >> $lockfile`
	#echo "$affected_cob" >> /var/www/html/SO/SO/UN_DASHBOARD/statd/output_$1.txt
#fi
done

 echo "Queue Depth,Affected Cobrands,Ongoing Tickets"
        affected_cobrand_list=`cat $lockfile | sort -r | uniq | head -n 5| sed "s/<cobrandId>/\,/g"`
	#echo "$affected_cobrand_list"
	out1=`echo "$affected_cobrand_list" | cut -d"," -f2 | tr '\n' ' '`
	cob_ids=( "$out1" )
	#echo "cob_ids"$cob_ids
	#echo "queue_depth"$queue_depth
	for cob_id in $cob_ids;do
	ticket_details=`sh /var/www/html/SO/SO/UN_DASHBOARD/statd/execute_get_incidents.sh $cob_id`
	queue_depth=`cat $lockfile | sort -r | uniq | head -n 5 | sed "s/<cobrandId>/\,/g" | grep $cob_id| cut -d"," -f1 | awk '{ SUM += $1} END { print SUM}'`
	echo "$queue_depth,$cob_id,$ticket_details"
	done
 #       echo "$affected_cobrand_list,$ticket_details"
fi
`rm $lockfile`
