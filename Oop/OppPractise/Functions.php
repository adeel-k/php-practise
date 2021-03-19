<?php


function hello($name){
    echo "hello " . $name;
    echo "<br>";
}

hello("Junaid");
hello("Mushtaq");

function city($name){
    echo "city" . $name;
    echo "<br>";
}
city(": Karachi");
city(": Lahore");
city(": Islamabad");
city(": Peshawar");
city(": Faisalabad");

function addition($first, $second){
    echo  $first + $second;
}
addition(21, 13);

echo "<br>";

function Multiply(){
    echo 45*2;
}
Multiply();

echo "<br>";

function Subtraction(){
    echo 52-50;
}
Subtraction();

echo "<br>";

function Division(){
    echo 45/2;
}
Division();

echo "<br>";

function Modulus(){
    echo 52%50;
}
Modulus();

echo "<br>";







?>