import requests
import json
import re
import os
import csv
from collections import Counter
filename='./scripts/Dashboard_output'
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
<thead class=\"thead-darl\"><tr><th>Cobrand group</th><th>Required File Count</th><th>Files found</th><th>Files SFTP Success</th><th>Status</th><th>Exception present</th><th>Last Check Date</th></tr></thead><tbody>'''
with open(filename, 'r') as csvfile:
    csvreader = csv.reader(csvfile)
    for fields in csvreader:
	if(fields):
	    if(fields[4]=='SUCCESS'):
		file_color='#99ff99'
	    if(fields[4]=='PENDING'):
		file_color="#ffb84d"
	    print "<tr><td>{0}</td><td>{1}</td><td><a href=\"getdetails.php?cob_name={0}&type=list\" target=\"_blank\">{2}</a></td><td>{3}</td><td bgcolor='{7}'>{4}</td><td><a href=\"getdetails.php?cob_name={0}&type=exception\" target=\"_blank\">{5}</a></td><td>{6}</td></tr>".format(fields[0],fields[1],fields[2],fields[3],fields[4],fields[5],fields[6],file_color)

print '''</tbody></table><script src="./libs/jquery-1.12.4.js"></script> 
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
	
	
