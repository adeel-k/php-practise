<?php

trait Nokia{
    public function A15(){

        echo "Nice brand Nokia";
        print "<br>";

    }

}

class QMobile{

    public function F2(){

        echo "Nice brand QMobile";
        print "<br>";

    }

}

class Samsung extends QMobile{

    use Nokia;
    public function A15(){

        echo "Nokia model number A15 in the best quality";
        print "<br>";
    }

    public function F2(){
        echo "QMobile model number F2 in the best quality";
        print "<br>";


    }

}

$brand = new Samsung();
$brand->A15();
$brand->F2();