<?php
$cob_name=$_POST['cob_name'];
$column=$_POST['column'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$output=shell_exec("python ./mqplotselect.py \"$cob_name\" \"$column\" \"$fromdate\" \"$todate\"");
echo "$output";
?>
