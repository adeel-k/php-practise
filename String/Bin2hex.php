<?php
$str = "Hello world";
echo bin2hex($str) . "<br>";
echo pack("H*",bin2hex($str)) . "<br>";
