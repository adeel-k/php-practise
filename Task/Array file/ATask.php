<?php
$array = [

      [
          "name" => "Zohaib",
          "assets" => [15, 27, 5, 6, 2, 50],


      ],

      [
          "name" => "amjad",
          "assets" => [0, 6, 13, 15, 2, 5, 7],

      ],

    false
    ];




echo "<pre>";
if($array[2] == true)
{
    $sorted = sort($sorted);
}
foreach($array as &$sorted){
    sort($sorted["assets"]);
}

print_r($array);


?>