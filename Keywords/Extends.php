<?php

class MyClass {
     public function hello() {
         echo "Hello World!";
    }
}

class AnotherClass extends MyClass {
}

$obj = new AnotherClass();
$obj->hello();