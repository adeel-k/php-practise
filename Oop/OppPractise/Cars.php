<?php

class Cars
{
     public $manufacturer;
     public $alsocalled;
     public $production;
     public $assembly;
     public $designer;

     public function __construct($manufacturer,$alsocalled,$production,$designer,$assembly){

         $this->manufacturer = $manufacturer;
         $this->alsocalled   = $alsocalled;
         $this->production   = $production;
         $this->assembly     = $assembly;
         $this->designer     = $designer;

     }

     public function getManufactuere(){
         return $this->manufacturer;
     }

    public function getAlsocalled(){
        return $this->alsocalled;
    }

    public function getProduction(){
        return $this->production;
    }

    public function getAssembly(){
        return $this->assembly;
    }

    public function getDesigner(){
        return $this->manufacturer;
    }

}

$paksuzuki = new Cars("Pak Suzuki Motors","	Suzuki Fronte Maruti 800","1988–2019","Pakistan","Suzuki");

echo $paksuzuki->getManufactuere();
echo    "<br>";
echo $paksuzuki->getAlsocalled();
echo    "<br>";
echo $paksuzuki->getProduction();
echo    "<br>";
echo $paksuzuki->getAssembly();
echo    "<br>";
echo $paksuzuki->getDesigner();
echo    "<br>";




