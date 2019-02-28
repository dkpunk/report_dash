import plotly
import plotly.graph_objs as go
import sys
import json
import os
from datetime import datetime
from dateutil.parser import parse
cobname=sys.argv[1]
column_number=sys.argv[2]
def get():
  stdin,stdout = os.popen2("cat /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/PROD_DASH/Audit_prod_dashboard.csv | grep "+cobname+" | tail -n 500 | cut -d, -f1,"+column_number)
  stdin.close()
  lines = stdout.readlines(); stdout.close()
  return lines
outlist=get()
plot_dict1=[]
date_arr=[]
#plot_dict1.append(["time","mq depth"])
for element in outlist:
	temparr1=parse(element[0:28])
	(y, m, d, h, min, sec, wd, yd, i)=temparr1.timetuple()
	date1="{1}-{0}-{2} {3}:{4}".format(d,m,y,h,min)
	#print date1	
	temparr2=element.split(",")
	plot_dict1.append([date1,int(temparr2[1])])
	date_arr.append(date1)
print '''<html>
<head>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script><script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
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
<form method="post">
From : <select id="fdt">'''
for selectelem in date_arr:
        print "<option value=\"{0}\">{0}</option>".format(selectelem)
print '''</select>
        To : <select id="tdt">'''
for selectelem in date_arr:
        print "<option value=\"{0}\">{0}</option>".format(selectelem)
print '''</select></form>
    <button onclick="myFunction()">Submit</button>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
    <iframe name="iFrameName" id="test" width="2000" height="1000"></iframe>
     <script type="text/javascript">
        function myFunction(){
                var fdt=document.getElementById("fdt");
                var fdt_val=fdt.options[fdt.selectedIndex].value;
                var tdt=document.getElementById("tdt");
                var tdt_val=tdt.options[tdt.selectedIndex].value;
                var cob_name="'''+cobname+'''";
                var column="'''+column_number+'''";
                var json_var={ "cob_name" : cob_name,"column" : column,"fromdate": fdt_val,"todate" : tdt_val};
		//alert(json_var);
                //alert(fdt_val);
                //alert(tdt_val);
		//alert(cob_name);
		//alert(column);
                $.ajax({
                        type: 'POST',
                        url : 'mqplotselect.php',
                        data : (json_var),
                        success: function(data){
                               $('#curve_chart').hide();
                //              alert(data);
                                var iframe = document.getElementById('test');
                                var iframedoc = iframe.document;
        if (iframe.contentDocument)
            iframedoc = iframe.contentDocument;
        else if (iframe.contentWindow)
            iframedoc = iframe.contentWindow.document;
                if (iframedoc){
         // Put the content in the iframe
         iframedoc.open();
         iframedoc.writeln(data);
         iframedoc.close();
         //alert(data);
     } else {
        //just in case of browsers that don't support the above 3 properties.
        //fortunately we don't come across such case so far.
        alert('Cannot inject dynamic contents into iframe.');
     }
                        },
                        error : function(jq,status,message){
                        alert("unable to fetch chart"+status+" Message "+message);}
                });
        }
	</script>
  </body>
</html>
'''
