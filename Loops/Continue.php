<?php



    $array = array( 1, 2, 3, 4, 5);

        foreach( $array as $value ) {
            if( $value == 0 )continue;
            echo "Value is $value <br />";

        }

    $x = 0;

        while($x < 10) {
         if ($x == 4) {
         $x++;
         continue;
    }
            echo "The number is: $x <br>";
            $x++;
}

