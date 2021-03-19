<?php


class Class1{

  public function one($omer = "Attendants"){

       $this->omer  = $omer;


        return $this->omer;

  }

}

Class Class2{

    public static function two($ali = "GoodBoy"){

            $ali = "1: present";




            return $ali;

    }

}

$st = new Class1();

print $st->one('Attendants');

print "<br><br>";

print Class2::two('1: Present');





