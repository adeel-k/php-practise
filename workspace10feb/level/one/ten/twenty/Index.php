<?php
$myfile = fopen("../../../two/four/five/five.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>