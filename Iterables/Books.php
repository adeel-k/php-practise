<?php
set_time_limit(0);
class Books implements Iterator
{
    private $title = [];
    private $count = 110000;
    private $price = 2500;


    public function current()
    {
        print " New model audi car book ---";
        return $this->title[$this->price];
    }
    public function next()
    {
        print " Mobile book in branded mobile information---";
        $this->price++;
    }
    public function rewind()
    {
        print " Humanity book in urdu to english---";
        $this->price = 1;
    }
    public function key()
    {
        print " It new book in software development---";
        return $this->price;
    }
    public function valid()
    {
        print " phpStorm is new version 8.0  ---";
        return isset($this->title[$this->key()]);
    }

    public function reverse()
    {
        $this->title = array_reverse($this->title);
        $this->rewind();
    }
    public function addPlace(string $place)
    {
        array_push($this->title, $place);
        $this->count++;
    }

    public function removePlace($place)
    {
        $price = array_search($place, $this->title);
        if(isset($this->title[$price])) {
            unset($this->title[$price]);
            $this->count--;
        }
    }
    public function totalCount()
    {
        return $this->count;
    }
}
$write = new Books();
$write->addPlace("Pakistan");
$write->addPlace("Australia");
$write->addPlace("America");
$write->addPlace("Saudi Arab");
$write->addPlace("Africa");
$write->addPlace("Europe");
foreach ($write as $key => $value) {
    echo "Key: ".$key."----";
    echo "Value: ".$value."<br/>";
}
$write->reverse();
echo "<hr/>";
foreach ($write as $key => $value) {
    echo "Key: ".$key."----";
    echo "Value: ".$value."<br/>";
}