<?php

    print "Filename: " . $_FILES['file']['name']
        . "<br>";
    print "Type : " . $_FILES['file']['type']
        . "<br>";
    print "Size : " . $_FILES['file']['size']
        . "<br>";
    print "Temp name: " . $_FILES['file']['tmp_name']
        . "<br>";
    print "Error : " . $_FILES['file']['error']
        . "<br>";
?>