
<?php

// Base Class
class demo {
    private $name="A Computer Science Portal for Geeks!";

    private function show()
    {
        echo "This is private method of base class";
    }
}

// Sub Class
class child extends demo {
    function display()
    {
        echo $this->name;
    }
}

// Object Declaration
$obj= new child;

// Uncaught Error: Call to private method demo::show()
$obj->show();

//Undefined property: child::$name
$obj->display();
?>
