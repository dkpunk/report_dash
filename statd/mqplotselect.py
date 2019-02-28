import plotly
import plotly.graph_objs as go
import sys
import json
import os
from datetime import datetime
from dateutil.parser import parse
import operator
import time
cobname=sys.argv[1]
column_number=sys.argv[2]
fromdate=sys.argv[3]
todate=sys.argv[4]
pattern='%m-%d-%Y %H:%M'
fromepoch=int(time.mktime(time.strptime(fromdate,pattern)))
toepoch=int(time.mktime(time.strptime(todate,pattern)))
#print fromepoch
#print toepoch
def get():
  stdin,stdout = os.popen2("cat /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/PROD_DASH/Audit_prod_dashboard.csv | grep "+cobname+" | tail -n 500 | cut -d, -f1,"+column_number)
  stdin.close()
  lines = stdout.readlines(); stdout.close()
  return lines
outlist=get()
plot_dict1=[]
time_dict={}
#plot_dict1.append(["time","mq depth"])
for element in outlist:
	temparr1=parse(element[0:28])
	(y, m, d, h, min, sec, wd, yd, i)=temparr1.timetuple()
	date1="{1}-{0}-{2} {3}:{4}".format(d,m,y,h,min)
	epoch=int(time.mktime(time.strptime(date1,pattern)))
	#print date1	
	temparr2=element.split(",")
#	plot_dict1.append([date1,int(temparr2[1])])
	time_dict[epoch]=[date1,int(temparr2[1])]
#print time_dict
for element in sorted(time_dict.keys()):
#	print time_dict[element]
	if(element >= fromepoch):
#		print "this-->"+str(time_dict[element])+"  "+str(element)
		plot_dict1.append(time_dict[element])
	if(toepoch <= element):
		break
print '''<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      
google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawLogScales);
function drawLogScales() {
    //alert("hello");
      var data = new google.visualization.DataTable();
      data.addColumn('date', 'Time');
      data.addColumn('number', 'MQ depth');
      data.addColumn({type:'string', role:'interval'});
      datearray='''
print plot_dict1
print ''';
var arrlength=datearray.length;
          for(var i=0;i<arrlength;i++){
              datearray[i].push(datearray[i][0]);
              datearray[i][0]=new Date(datearray[i][0]);
          }
    datearray.sort(function(a,b){
        return a[0]-b[0];
    })
    chartData=datearray;
    //alert(chartData);
  for (var i in chartData){
   // alert(chartData[i][0]+'=>'+ parseInt(chartData[i][1]));
    data.addRow([chartData[i][0],chartData[i][1],chartData[i][2]]);
  }

      var options = {
        hAxis: {
          title: 'Time',
          logScale: false
        },
        vAxis: {
          title: 'MQ Depth',
          logScale: false
        },
        colors: ['#a52714', '#097138']
      };

      var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
      chart.draw(data, options);
    }
      
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>
'''
