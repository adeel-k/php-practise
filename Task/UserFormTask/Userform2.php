<?php

// define variables and set to empty values

$Userdata=[];




if($_SERVER['REQUEST_METHOD'] === 'POST' ){
    $Userdata[0]=$_POST["firstname"];
    $Userdata[1]=$_POST["lastname"];
    $Userdata[2]=$_POST["contactNum"];
    $Userdata[3]=$_POST["address"];
    $Userdata[4]=$_POST["Nicnum"];
    $Userdata[5]=$_POST["email"];
    $Userdata[6]=$_POST["gender"];
    $Userdata[7]=$_POST["DateTime"];





    foreach($Userdata as $value){
        echo "$value <br>";
    }



}


?>




