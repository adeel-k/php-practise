<?php

$string = "Hello world. Beautiful day today.";
$token = strtok($string, " ");

while ($token !== falsesss)
{
    echo "$token<br>";
    $token = strtok(" ");
}