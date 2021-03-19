<?php

$operation = "-";
$operand1 = 300;
$operand2 = 100;

switch($operation){
    case "/":

        echo $operand1 / $operand2 . "<br>";
        break;

    case "-":

        echo "$operand1 - $operand2 ". "<br>";
        break;

    case "+":

        echo "$operand1 + $operand2" . "<br>";
        break;

    case "==":

        echo "$operand1 == $operand2" . "<br>";
        break;

    case "*":

        echo "$operand1 * $operand2" . "<br>";
        break;

    case "%":

        echo "$operand1 % $operand2" . "<br>";
        break;
    default:
    }














