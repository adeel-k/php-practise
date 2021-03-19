<?php


class Office
{
    public $title;
    public $boss;
    public $manager;
    public $cto;
    public $admin;

    public function __construct($title,$boss,$manager){

        $this->title = $title;
        $this->boss  = $boss;
        $this->manager = $manager;
    }
     public function getTitle(){
        return $this->manager;
     }

     public function getBoss(){
        return $this->boss;
     }

     public function getManager(){
        return $this->manager;
     }

     public function  getCto(){
        return $this->cto;
     }
     public function getAdmin(){
        return $this->admin;
     }

     public function setCto($cto){
        $this->cto=$cto;
     }
     public function setAdmin($admin){
        $this->admin=$admin;
     }

}

$Mediapark = new Office("Mediapark","Furqan","Rehman",);

echo $Mediapark->getTitle();
echo "<br>";
echo $Mediapark->getBoss();
echo "<br>";
echo $Mediapark->getManager();
echo "<br>";
$Mediapark->setCto("Azhar");
echo $Mediapark->getCto();
echo "<br>";
$Mediapark->setAdmin("Mutabir");
echo $Mediapark->getAdmin();
echo "<br>";


