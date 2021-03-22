<?php


class office{


            public static $my_static = 'First Floor';



            public function staticValue(){
                return self::$my_static;
                return self::$my_doc;

            }

}

class Mediapark extends office{

        public static $my_word = 'MedoiaPark';

        public function offStatic(){
         return  Mediapark::$my_word;

        }

    }

    print office::$my_static . "\n";


echo "<br>";
$work = new office();
echo "<br>";
print $work->staticValue();
echo "<br>";
print $work->my_static . "\n";
echo "<br>";
print $work::$my_static . "\n";
echo "<br>";
$classname = 'office';
echo "<br>";
print $classname::$my_static;

echo "<br><br>";

print Mediapark::$my_word . "\n";

echo "<br>";

$md = new Mediapark();
echo "<br>";
print $md->offStatic() . "\n";
echo "<br>";
print $md->my_word . "\n";
echo "<br>";
print $md::$my_word . "\n";
echo "<br>";
$classname = 'Mediapark';
echo "<br>";
print $classname::$my_word . "\n";




