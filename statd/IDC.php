

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
$stat=fopen('IDC_stat_prod.txt','r');
while(! feof($stat))
{
     $line=fgets($stat);
     $line=trim($line);

  if($line!=''){
  $data= explode(':',$line);
  $data=implode('</td><td>',$data);
  $data='<td>'.$data.'</td>';
  $data=str_replace('<td></td>','',$data);
  $tr.='<tr>'.$data.'</tr>';
  }
   
}


$stat=fopen('IDC_depth_prod.txt','r');
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



<h1 color='white'> MQ Status </h1>

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>IP</th>
                <th>Port</th>
                <th>Queue Manager</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
      <?php echo $tr; ?>        
 </tbody>

</table>

<h1> MQ Depth </h1>

<table id="example1" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>MQ</th>
                <th>CacheRequest</th>
                <th>CacheResponse</th>
                <th>InstantRequest</th>
                <th>InstantResponse</th>
                <th>MFARequest</th>
                <th>MFAGATHResponse</th>
                <th>Alerts</th>
                <th>MFAAppRequest</th>
                <th>WEBHOOKS</th>
                <th>WEBHOOKS_MFA</th>
            </tr>
        </thead>
        <tbody>
      <?php echo $tr1; ?>
 </tbody>

</table>

<script src="jquery-1.12.4.js"></script> 
     <script src="jquery.dataTables.min.js"></script>
     <script src="dataTables.bootstrap.min.js"></script>
      <link href="bootstrap.min.css" rel="stylesheet"> 
      <link href="dataTables.bootstrap.min.css" rel="stylesheet">
      


    <script>


$(document).ready(function() {
    $('#example').DataTable();
     $('#example1').DataTable();
} );



</script>
</body>
</html>
