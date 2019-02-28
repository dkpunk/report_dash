<?php
$cob_name=$_GET['cob_name'];
$type=$_GET['type'];
$output=shell_exec("python ./getdetails.py $cob_name $type");
echo "$output";
?>
