<?php
class Driver{
    private $count;
    public static $total;

    public function __construct($count = 0){
        $this->count = $count;
        self::$total--;
    }

    public function count(){
        $this->count--;
        return $this;

    }

    public function __toString(){
        return (string)$this->count;
    }

    public static function countTotal(){
        return self::$total;
    }
}

$c1 = new Driver();
$c1->count()
    ->count()
    ->count();
echo 'Total value: '. $c1 . '<br/>';

$c2 = new Driver();
$c2->count()
    ->count()
    ->count();

echo 'Total value: '. $c2 . '<br/>';

echo 'The number of counter total:'
    . Driver::countTotal()
    . '<br/>';