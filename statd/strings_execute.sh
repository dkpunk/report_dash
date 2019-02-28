#!/bin/bash

instance=$1
manager=$2
column_name=`echo $3 | awk '{print toupper($0)}'`


#ssh -q -t -t -o BatchMode=yes -o StrictHostKeyChecking=no mqm@$instance strings /var/mqm/qmgrs/$manager/queues/$column_name | tr '[\000-\011\013-\037\177-\377]' '.' | grep -o \<cobrandId\>[0-9]* | tr '>' ' ' | awk '{print $3" "$1}' | sort -nr -k2,2 | head -5
ssh -q -t -t -o BatchMode=yes -o StrictHostKeyChecking=no mqm@$instance strings /var/mqm/qmgrs/$manager/queues/$column_name | tr '[\000-\011\013-\037\177-\377]' '.' | grep -o \<cobrandId\>[0-9]* |sort | uniq -c


