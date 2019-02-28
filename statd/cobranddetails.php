
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
$cobrand_group=$_GET['cobrand_group'];
$column=$_GET['column'];
$output=shell_exec('sh ./cobranddetails.sh '.$cobrand_group.' '.$column.' | ./csv_to_html.awk');
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
</script>
</body>
</html
