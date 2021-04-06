<?php

 $number_1 = 22;
 $number_2 = 46;

    echo "First Number(number_1) = $number_1";
        print "<br>";

    echo "Second Number(number_2) = $number_2";
        print "<br>";

    echo "Addition of numbers: ";
    echo $number_1 + $number_2;
        print "<br>";

    echo "Subtraction of numbers: ";

     if($number_1>$number_2){
        echo $number_1 - $number_2 ;}

    else{
        echo $number_2 - $number_1;
 }
        print "<br>";

      echo  "Multiplication of Numbers :";
    echo $number_1*$number_2;

        echo "<br>";

    echo "Division of numbers:: ";
        if($number_1>$number_2){
            echo $number_1/$number_2;}
    else{
        echo $number_2/$number_1;
   }   echo "<br/>";

        if($number_1%2==0){
        if($number_1%3==0){
        if($number_1%5==0){
        if($number_1%7==0){

        echo "1st Number : $number_1 is not prime number";
        }
        echo "1st Number : $number_1 is not prime number";
        }
        echo "1st Number : $number_1 is not prime number";
        }
        echo "1st Number : $number_1 is not prime number";
        }
            print "<br>";

        if($number_2%2==0){
        if($number_2%3==0){
        if($number_2%5==0){
        if($number_2%7==0){

            echo "2nd Number : $number_2 is not prime number";
            }
            echo "2nd Number : $number_2 is not prime number";
            }
            echo "2nd Number : $number_2 is not prime number";
            }
            echo "2nd Number : $number_2 is not prime number";
    }
    else{
            echo "2nd Number : $number_2 is not prime number";
    }
                print "<br>";

            echo "Square of number_1($number_1) = ";
            echo pow($number_1,2);
                print  "<br>";

            echo "Square of number_2($number_2) = ";
            echo pow($number_2,2);
                print "<br>";
