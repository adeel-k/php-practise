<?php

trait Pakistan{

    public function KarachiIndustry(){

        print "Pakistan Storm Pen Company In City Karachi";
        echo "<br>";

    }

}


trait America{

    public function HoustonIndustry(){

        print "America Storm Pen Company In City  Houston";
        echo "<br>";



    }

}

class PakPen {
    use Pakistan;
}



class AmPen {
    use Pakistan, America;


}


$company = new PakPen();
$company->KarachiIndustry();
print "<br>";

$company2 = new AmPen();
$company2->KarachiIndustry();
$company2->HoustonIndustry();


