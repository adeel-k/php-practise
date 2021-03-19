<?php

class bus
{
    protected  $a = 1000;
    protected  $b = 600;

    function  sub()
    {
        echo $sum = $this->a - $this->b . "<br>";
    }
}
class  extends bus

   {
    function mul()
    {
        echo $sub=$this->a*$this->b;
    }

}

$zee = new child;
$zee->sub();
$zee->mul();
