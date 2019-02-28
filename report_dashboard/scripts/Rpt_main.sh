#!/bin/sh

#script_home=/var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/UN_DASHBOARD/Reports_DASH
script_home=/var/www/html/report_dashboard/scripts
dat_WF=`date '+%Y%m%d'`
dat_AB=`date -d '-1 day' '+%Y%m%d'`
script_dat=`date`
tot_WF_files=26
tot_AB_files=10
tot_CITI_files=6
dat_CITI=`date -d '-1 day' '+%Y%m%d'`
echo "" > $script_home/Report_output
for cob in `cat $script_home/cob.txt`
do

WF(){
    echo "Runnning for $cob:"
     if [ "$cob" == "Wells_Fargo" ];then

        	files_WF=`ssh otc@172.17.15.225 find /var/insight/ -mtime -1 -iname "10001152*pgp" -ls | awk -F"/" '{print $NF}' | sort`
        	echo "$files_WF" >$script_home/jptest.txt
		echo "$files_WF" >$script_home/wflist.txt
        	tot_WF_files_rc=`echo "$files_WF" | wc -l`
		echo "Files found $files_WF"
     
                echo "logs are "
                out_logs=`ssh otc@172.17.15.225 sh /home/otc/log_check.sh`

                no_logs_check=`echo "$out_logs" | grep -ivE "Logs of|---"`
		echo "$no_logs_check" > $script_home/wfexceptions.txt

                sftp_up=`echo "$out_logs" | grep -i "SFTP check : success" | wc -l`
                 

       echo "$out_logs" | grep -iv "SFTP check : success" >$script_home/dhi.txt
       if [ "$tot_WF_files" -eq "$tot_WF_files_rc" ];then

            if [ "$tot_WF_files" -eq "$sftp_up" ];then
            
                echo "WELLS_FARGO,$tot_WF_files,$tot_WF_files_rc,$sftp_up,SUCCESS,NO EXCEPTIONS,$script_dat" >>$script_home/Report_output
            else
               if [ -z "$no_logs_check" ];then
                echo "WELLS_FARGO,$tot_WF_files,$tot_WF_files_rc,$sftp_up,SUCCESS,NO EXCEPTIONS,$script_dat" >>$script_home/Report_output
                else
                echo "WELLS_FARGO,$tot_WF_files,$tot_WF_files_rc,$sftp_up,SUCCESS,EXCEPTION,$script_dat" >>$script_home/Report_output
                fi

            fi
       else
             diff $script_home/WF_std_list1.txt $script_home/jptest.txt | awk '{print $2}' | grep -v "^$"       
             echo "WELLS_FARGO,$tot_WF_files,$tot_WF_files_rc,$sftp_up,PENDING,NA,$script_dat" >>$script_home/Report_output
       fi

     fi
}

WF

    ####ABMU#####

    if [ "$cob" == "ABMU" ];then

                files_AB=`ssh otc@172.25.18.140 find /opt/ctier/customreport_output/abmu_report/daily/ -mtime -1 -iname "$dat_AB"_"10006168*pgp" -ls | awk -F"/" '{print $NF}' | sort`
		echo "$files_AB" >$script_home/abmulist.txt
		scp $script_home/abmulist.txt otc@172.25.18.140:/home/otc/abmulist.txt
                tot_AB_files_rc=`echo "$files_AB" | wc -l`

                echo "tot are $tot_AB_files_rc "
#                out_logs_AB=`ssh otc@172.25.18.140 "grep -iE 'File successfully SFTP uploaded|exception' /opt/ctier/customreport_logs/abmu_customreport_$dat_AB.log"`
		out_logs_AB=`ssh otc@172.25.18.140 sh /home/otc/log_check_abmu.sh`

                #no_logs_check_AB=`echo "$out_logs" | grep -ivE "Logs of|---"`

                sftp_up=`echo "$out_logs_AB" | grep -i "SFTP check : success" | wc -l`
                no_logs_check_AB=`echo "$out_logs" | grep -iv "SFTP check : success"`


       echo "$out_logs" | grep -iv "SFTP check" >$script_home/abmuexceptions.txt
       if [ "$tot_AB_files" -eq "$tot_AB_files_rc" ];then

            if [ "$tot_AB_files" -eq "$sftp_up" ];then

                echo "ABMU,$tot_AB_files,$tot_AB_files_rc,$sftp_up,SUCCESS,NO EXCEPTIONS,$script_dat" >>$script_home/Report_output
            else
               if [ -z "$no_logs_check" ];then
                echo "ABMU,$tot_AB_files,$tot_AB_files_rc,$sftp_up,PENDING,NO EXCEPTIONS,$script_dat" >>$script_home/Report_output
                else
                echo "ABMU,$tot_AB_files,$tot_AB_files_rc,$sftp_up,PENDING,EXCEPTION,$script_dat"  >>$script_home/Report_output
                fi

            fi
       else
             diff $script_home/AB_std_list1.txt $script_home/abmurcvlist.txt | awk '{print $2}' | grep -v "^$"
             echo "ABMU,$tot_AB_files,$tot_AB_files_rc,$sftp_up,PENDING,NA,$script_dat" >>$script_home/Report_output
       fi

     fi
###CITI######
  if [ "$cob" == "CITI" ];then
	tot_CITI_files=6
	cobrand_id=10006164
	dat_CITI=`date -d '-1 day' '+%Y%m%d'`
	files_CITI=`ssh otc@172.17.15.62 find "/var/insight/" -name "$dat_CITI"_"$cobrand_id*pgp" | awk -F"/" '{print $NF}' | sort`
	echo "count CITI:$files_CITI"
	echo "$files_CITI" >$script_home/citilist.txt
        tot_CITI_files_rc=`echo "$files_CITI" | wc -l`
  	echo "logs are "
		`scp $script_home/citilist.txt otc@172.17.15.62:/home/otc/`
                out_logs=`ssh otc@172.17.15.62 sh /home/otc/log_check_citi.sh`

                no_logs_check=`echo "$out_logs" | grep -ivE "Logs of|---"`
		echo "$no_logs_check" >$script_home/citiexceptions.txt

                sftp_up=`echo "$out_logs" | grep -i "SFTP check : success" | wc -l`


       #echo "$out_logs" | grep -iv "SFTP check" >$script_home/dhi.txt
       if [ "$tot_CITI_files" -eq "$tot_CITI_files_rc" ];then

            if [ "$tot_CITI_files" -eq "$sftp_up" ];then

                echo "CITI,$tot_CITI_files,$tot_CITI_files_rc,$sftp_up,SUCCESS,NO EXCEPTIONS,$script_dat" >>$script_home/Report_output
            else
               if [ -z "$no_logs_check" ];then
                echo "CITI,$tot_CITI_files,$tot_CITI_files_rc,$sftp_up,SUCCESS,NO EXCEPTIONS,$script_dat" >>$script_home/Report_output
                else
                echo "CITI,$tot_CITI_files,$tot_CITI_files_rc,$sftp_up,SUCCESS,EXCEPTION,$script_dat" >>$script_home/Report_output
                fi

            fi
       else
             diff $script_home/WF_std_list1.txt $script_home/jptest.txt | awk '{print $2}' | grep -v "^$"
             echo "CITI,$tot_CITI_files,$tot_CITI_files_rc,$sftp_up,PENDING,NA,$script_dat" >>$script_home/Report_output
       fi
  fi
###############TIAA#######################
if [ "$cob" == "TIAA" ];then
        tot_TIAA_files=23
        cobrand_id=10005808
        dat_TIAA=`date -d '-1 day' '+%Y%m%d'`
        #files_TIAA=`ssh otc@172.17.15.62 find "/var/insight/" -name "$dat_TIAA"_"$cobrand_id*pgp" | awk -F"/" '{print $NF}' | sort`
	files_TIAA=`ssh otc@172.17.15.62 ls /var/insight/ | grep  "20190204_10005808.*pgp"`
        echo "count TIAA:$files_TIAA"
        echo "$files_TIAA" >$script_home/tiaalist.txt
        tot_TIAA_files_rc=`echo "$files_TIAA" | wc -l`
        echo "logs are "
                `scp $script_home/tiaalist.txt otc@172.17.15.62:/home/otc/`
                out_logs=`ssh otc@172.17.15.62 sh /home/otc/log_check_tiaa.sh`

                no_logs_check=`echo "$out_logs" | grep -ivE "Logs of|---"`
		echo "$no_logs_check" >$script_home/tiaaexceptions.txt

                sftp_up=`echo "$out_logs" | grep -i "SFTP check : success" | wc -l`


       #echo "$out_logs" | grep -iv "SFTP check" >$script_home/dhi.txt
       if [ "$tot_TIAA_files" -eq "$tot_TIAA_files_rc" ];then

            if [ "$tot_TIAA_files" -eq "$sftp_up" ];then

                echo "TIAA,$tot_TIAA_files,$tot_TIAA_files_rc,$sftp_up,SUCCESS,NO EXCEPTIONS,$script_dat" >>$script_home/Report_output
            else
               if [ -z "$no_logs_check" ];then
                echo "TIAA,$tot_TIAA_files,$tot_TIAA_files_rc,$sftp_up,SUCCESS,NO EXCEPTIONS,$script_dat" >>$script_home/Report_output
                else
                echo "TIAA,$tot_TIAA_files,$tot_TIAA_files_rc,$sftp_up,SUCCESS,EXCEPTION,$script_dat" >>$script_home/Report_output
                fi

            fi
       else
             echo "TIAA,$tot_TIAA_files,$tot_TIAA_files_rc,$sftp_up,PENDING,NA,$script_dat" >>$script_home/Report_output
       fi
  fi

if [ "$cob" == "RBC" ];then
        tot_RBC_files=12
        cobrand_id=10019004
        dat_RBC=`date '+%Y%m%d'`
        files_RBC=`ssh otc@10.75.4.16 find "/var/insight/rbc_dataextracts/" -name "$dat_RBC"_"$cobrand_id*pgp" | awk -F"/" '{print $NF}' | sort`
        echo "count RBC:$files_RBC"
        echo "$files_RBC" >$script_home/rbclist.txt
        tot_RBC_files_rc=`echo "$files_RBC" | wc -l`
        echo "logs are "
                `scp $script_home/rbclist.txt otc@10.75.4.16:/home/otc/`
                out_logs=`sh /var/www/html/report_dashboard/scripts/log_check_rbc.sh`

                no_logs_check=`echo "$out_logs" | grep -ivE "Logs of|---"`

                sftp_up=`echo "$out_logs" | grep -i "SFTP check : success" | wc -l`


       #echo "$out_logs" | grep -iv "SFTP check" >$script_home/dhi.txt
       if [ "$tot_RBC_files" -eq "$tot_RBC_files_rc" ];then

            if [ "$tot_RBC_files" -eq "$sftp_up" ];then

                echo "RBC,$tot_RBC_files,$tot_RBC_files_rc,$sftp_up,SUCCESS,NO EXCEPTIONS,$script_dat" >>$script_home/Report_output
            else
               if [ -z "$no_logs_check" ];then
                echo "RBC,$tot_RBC_files,$tot_RBC_files_rc,$sftp_up,SUCCESS,NO EXCEPTIONS,$script_dat" >>$script_home/Report_output
                else
                echo "RBC,$tot_RBC_files,$tot_RBC_files_rc,$sftp_up,SUCCESS,EXCEPTION,$script_dat" >>$script_home/Report_output
                fi

            fi
       else
             echo "RBC,$tot_RBC_files,$tot_RBC_files_rc,$sftp_up,PENDING,NA,$script_dat" >>$script_home/Report_output
       fi
  fi
done
`cp $script_home/Report_output $script_home/Dashboard_output`
