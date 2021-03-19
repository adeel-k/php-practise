<!DOCTYPE html>
<html>
<body>

<?php
 $Fll = [
         [
                 "Adeel" => "khan",
                 "Age,Date of Birth"   => [20,"31-2-1999"]
         ],

         [
                 "Adeel" => "Omer",
                 "Age,Date of Birth"   => [20,"3-12-2000"]

         ],

     true

 ];


echo "<pre>";


if($Fll[2] == true)
{
    $sorted = asort($Fll);
}
foreach($Fll as &$sorted){
    sort($sorted["Age,Date of Birth"]);
}
print_r($Fll);


?>

</body>
</html>
