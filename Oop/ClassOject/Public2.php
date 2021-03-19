<?php
class work
{
    public $tag_name = "A Computer Science Portal for Geeks ";

    function  simple()
    {
        print $this->tag_name . "<br>";
    }

}
class copy extends work

{
    function hard ()
    {
        print $this->tag_name . "<br>";
    }
}
$paste = new copy;
print  $paste->tag_name . "<br>";

$paste->simple();
$paste->hard();

