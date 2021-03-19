<?php

$myfile = fopen ("Name.txt", "w")or die("Unable to Open file!");
$txt = "Hello Adeel\n";
fwrite($myfile, $txt);
fclose($myfile);

$myfile = fopen("Name.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);

?>

<?php
mkdir("Round");
?>

