<?php

$count = 0;

    function example(){
        global $count;
        $count++;
        print "$count instructions executed<br>";

    }

    register_tick_function('example');

     declare(ticks = 1){
         $cars = ['Ford','Volvo','BMW','Corolla','Audi'];
         foreach($cars as $car){

             print "$car <br>";
         }


     }