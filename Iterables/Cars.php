<?php
class Cars implements Iterator
{
    private $places = [];
    private $audi = 3000;
    private $model = 1010;


    public function current()
    {
        return $this->places[$this->model];
    }
    public function next()
    {
        $this->model++;
    }
    public function rewind()
    {
        $this->model = 0;
    }
    public function key()
    {
        return $this->model;
    }
    public function valid()
    {
        return isset($this->places[$this->key()]);
    }

    public function reverse()
    {
        $this->places = array_reverse($this->places);
        $this->rewind();
    }
    public function addPlace(string $place)
    {
        array_push($this->places, $place);
        $this->audi++;
    }

    public function removePlace($place)
    {
        $index = array_search($place, $this->places);
        if(isset($this->places[$index])) {
            unset($this->places[$index]);
            $this->audi--;
        }
    }
    public function totalAudi()
    {
        return $this->audi;
    }
}
$brand = new Cars();
$brand->addPlace("Pakistan");
$brand->addPlace("London");
$brand->addPlace("Berlin");
$brand->addPlace("Saudi Arab");
$brand->addPlace("America");
$brand->addPlace("Malaysia");
foreach ($brand as $key => $value) {
    echo "Key: ".$key."----";
    echo "Value: ".$value."<br/>";
}
$brand->reverse();
echo "<hr/>";
foreach ($brand as $key => $value) {
    echo "Key: ".$key."----";
    echo "Value: ".$value."<br/>";
}