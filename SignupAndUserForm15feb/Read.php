<?php

$fh = fopen('credentials.txt', 'r');
$username = null;
$password = null;

$GLOBALS['username'] = fgets($fh);
$GLOBALS['password']= fgets($fh);
//echo $username . "<br>" . $password;
fclose($fh);
?>
