<?php

class bus{

    public function eno ($a, $d){

        print "Bus Rate 5000000";
        echo "<br>";
        return $a + $d;
    }
    public function coaster ($a, $d )
    {
        print "Coaster Rate 2500000";
        echo "<br>";
        return $a - $d;
    }
    public function suzuki ($a, $d)
    {
        print "Suzuki Rate 1100000";
        echo  "<br>";
        return $a * $d;
    }
}

$bike = new bus();
echo $bike->eno(2,1);
echo "<br>";
echo $bike->coaster(2,1);
echo "<br>";
echo $bike->suzuki(3,2);
echo "<br>";
