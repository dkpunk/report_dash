<?php
$cob_name=$_GET['cob_name'];
$column=$_GET['column'];
$output=shell_exec("python ./mqplot.py \"$cob_name\" \"$column\" ");
echo "$output";
?>
