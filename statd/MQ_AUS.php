

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>MQ Status</title>
<link rel="icon"
      type="image/png"
      href="/SO/images/favicon.ico">



</head>
<body>

<?php

$stat=fopen('MQ_AUS','r');
while(! feof($stat))
{
     $line=fgets($stat);
     $line=trim($line);
if($line!==''){
    
$data= explode(',',$line);
  $data=implode('</td><td>',$data);
  $data='<td>'.$data.'</td>';
  $data=str_replace('<td></td>','',$data);
  $tr1.='<tr>'.$data.'</tr>';
}
}
     

?>



<h1>Affected Co-brands </h1>

<table id="example1" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ENVIRONMENT</th>
                <th>CaReq</th>
                <th>CaResp</th>
                <th>InstReq</th>
                <th>InstResp</th>
                <th>MFARequest</th>
                <th>MFAGATHResp</th>
                <th>MFAAppRequest</th>
                <th>Alerts</th>
                <th>Alerts_FQ</th>
                <th>WEBHOOKS</th>
                <th>WEBHOOKS_MFA</th>
            </tr>
        </thead>
        <tbody>
      <?php echo $tr1; ?>
 </tbody>

</table>

<?php
$output=shell_exec("sh /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/UN_DASHBOARD/mq_make_table.sh MQ_AUS");
echo "<p>$output</p>";
?>

<script src="jquery-1.12.4.js"></script> 
     <script src="jquery.dataTables.min.js"></script>
     <script src="dataTables.bootstrap.min.js"></script>
      <link href="bootstrap.min.css" rel="stylesheet"> 
      <link href="dataTables.bootstrap.min.css" rel="stylesheet">
      


    <script>


$(document).ready(function() {
     $('#example1').DataTable();
} );
<?php echo $cobrand_group;?>


</script>
</body>
</html>
