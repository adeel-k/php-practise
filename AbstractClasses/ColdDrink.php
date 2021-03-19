<?php



abstract class ColdDrink{


    abstract protected function prefixName($name);
}
class CocaCola extends ColdDrink{

    public function prefixName($name, $one= "."){
        if ($name == "Drink hard"){
            $prefix = "one";
        }elseif ($name == "Drink soft"){
            $prefix = "two";
        }else{
            $prefix = "";
        }
        return "{$prefix}{$one}{$name}";
    }
}

$botel = new CocaCola;

print $botel->prefixName("Drink"). "\n";
print $botel->prefixName("Drink12")."\n";
