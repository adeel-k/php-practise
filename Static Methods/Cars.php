<?php


class Bike {

    static $count;

    public static function getCount() {
        return self::$count++;
    }
}

Bike::$count ;

for($i = 0; $i < 1; ++$i) {

    print "Order 2 :";
    echo 'World best honda bike 2021: '.

        Bike::getCount() . "\n";
    echo "<br>";
}

print "<br>";

Bike::$count  ;

for($b = 0; $b < 1; ++$b) {

    print "Order 4 :";
    echo 'World fantastic bike star 2005: '.

        Bike::getCount() . "\n";
    echo "<br>";
}

echo "<br>";


print "Sub total 6 "

?> 
