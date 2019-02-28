#!/bin/sh
export http_proxy=http://172.17.25.200:3128
export https_proxy=http://172.17.25.200:3128
/bin/python /var/www/html/SO/SO/UN_DASHBOARD/statd/getincidents.py $1
