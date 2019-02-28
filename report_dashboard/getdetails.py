import requests
import json
import re
import os
import csv
from collections import Counter
import sys
cob_name=sys.argv[1]
file_type=sys.argv[2]
file_dict={'exception':{"WELLS_FARGO":"wfexceptions.txt","TIAA":"tiaaexceptions.txt","CITI":"citiexceptions.txt","ABMU" :"abmuexceptions.txt"},'list':{"WELLS_FARGO" : "wflist.txt","TIAA" : "tiaalist.txt","RBC" : "rbclist.txt","CITI" : "citilist.txt","ABMU" : "abmulist.txt"}}
filename="/var/www/html/report_dashboard/scripts/"+file_dict[file_type][cob_name]
print '''
<!DOCTYPE html>
<html>
<head>
<title>Report Monitoring</title>
<style>
.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}
.showme{ 
   display: none;
 }
 .showhim:hover .showme{
   display : block;
 }
 .showhim:hover .ok{
   display : none;
 }
table {
  border-collapse: collapse;
}
th {
background-color: #eee;
}
.tooltip {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 12px;
  font-style: normal;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  white-space: normal;
  /* ... */
}
.tooltip-inner {
  max-width: 200px;
  padding: 3px 8px;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 4px;
}
table, th, td {
  border: 1px solid black;
}</style>
</head><body><h3>Reports Monitoring</h3>
<table id=\"customers\" class=\"table table-bordered\" cellspacing=\"0\" style=\"width:100%\">
<thead class=\"thead-darl\"><tr><th>Details</th></tr></thead><tbody><tr><td>'''
f_obj=open(filename, 'r')
for line in f_obj:
	print line+"<br>"
f_obj.close()
print '''</td></tbody></table><script src="./libs/jquery-1.12.4.js"></script> 
     <script src="./libs/jquery.dataTables.min.js"></script>
     <script src="./libs/dataTables.bootstrap.min.js"></script>
      <link href="./libs/bootstrap.min.css" rel="stylesheet"> 
      <link href="./libs/dataTables.bootstrap.min.css" rel="stylesheet">
      


    <script>


$(document).ready(function() {
     $('#customers').DataTable({
"pageLength":20
});
} );


</script></body></html>'''
	
	
