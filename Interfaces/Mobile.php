<?php


interface Sounds{

    public function makeSound();

}

class QMobile implements Sounds{

    public function makeSound()
    {
        echo " QMobile Ringtone  ";
        print "<br><br>";
    }

}


class Vivo implements Sounds{

    public function makeSound()
    {

        echo " Vivo Ringtone  ";
        print "<br><br>";

    }

}


class Huawei implements Sounds{

    public function makeSound()
    {

        echo " Huawei Ringtone  ";
        print "<br><br>";
    }

}


class Oppo implements Sounds{

    public function makeSound()
    {

        echo " Oppo Ringtone  ";
        print "<br><br>";

    }

}

class Sony implements Sounds{

    public function makeSound()
    {

        echo " Sony Ringtone  ";
        print "<br><br>";
    }

}


$qmobile = new QMobile();
$vivo = new Vivo();
$huawei = new Huawei();
$oppo = new Oppo();
$sony = new Sony();
$sounds = array($qmobile,$vivo,$huawei,$oppo,$sony);


foreach ($sounds as $sound ){

    $sound->makeSound();
}







