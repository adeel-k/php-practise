<?php

$str = "Pakistan";
// Encode the string
$encodeString = convert_uuencode($str);
echo $encodeString . "<br>";

// Decode the string
$decodeString = convert_uudecode($encodeString);
echo $decodeString;