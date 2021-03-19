<?php

$myfile = fopen ("About.txt", "w")or die("Unable to Open file!");
$txt = "The fgets() function is used to read a single line from a file.\n";
fwrite($myfile, $txt);
fclose($myfile);

$myfile = fopen("About.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);

?>