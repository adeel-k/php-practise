<?php

class Admin{

    public $a = "Admin in salary minimum";
    public $b = '40K';


}

$jb = new Admin();

foreach($jb as $info){
    echo $info . ' ';
}

?>