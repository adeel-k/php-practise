<?php

class MyClass {}
class AnotherClass extends MyClass{}

    $obj = new AnotherClass();

    if($obj instanceof AnotherClass) {
        echo "The object is AnotherClass";
}


    if($obj instanceof MyClass) {
        echo "The object is MyClass<br>";
}
