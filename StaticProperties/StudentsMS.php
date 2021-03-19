<?php

class Students{

    protected $count;
    public static $total;


    public function __construct($count = 0){

        $this->count = $count;
        self::$total++;
    }

    public function count(){
        $this->count++;
        return $this;

    }

    public function __toString(){
        return (string)$this->count;

    }

    public static function countTotal(){
        return self::$total;
    }

}


$std = new Students();
$std->count()
    ->count()
    ->count()
    ->count()
    ->count()
    ->count()
    ->count()
    ->count()
    ->count()
    ->count()
    ->count()
    ->count();




print 'Students Present '. $std . '<br/>';


$std2 = new Students();




print '2 absent 1 leave'. '<br/>';

print 'The total number 15 '. '<br/>';

