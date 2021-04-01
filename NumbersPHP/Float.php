<?php

$ft = 5.12;
var_dump(is_float($ft));

print "<br><br>";

$var = 122.34343;
var_dump($var);

print "<br><br>";

$var = '122.34343The';
$float_value_of_var = floatval($var);
echo $float_value_of_var;