<?php

$str = "Hello";
echo sha1($str);


if (sha1($str) == "f7ff9e8b7bb2e09b70935a5d785e0cc5d9d0abf0")
{
    echo "<br>Hello world";
    exit;
}