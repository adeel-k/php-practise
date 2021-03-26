<?php

    abstract class Car{

        public function world(){

            print "Hello world";
            echo "<br><br>";
        }

    }


    class Corolla extends Car{

        public function model(){

            print " Corolla car made in pakistan model 2021";

        }

    }


$brand = new Corolla();
$brand->world();
$brand->model();


