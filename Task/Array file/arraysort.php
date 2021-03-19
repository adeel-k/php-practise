<!DOCTYPE html>
<html>
<body>

<?php
$array = [
    [
        "name" => "zohaib", "assets" => [15, 27, 5, 6, 2, 50]
    ],
    [
        "name" => "amjad", "assets" => [0, 6, 13, 15, 2, 5, 7]
    ],
   true





];



echo "<pre>";
echo "Before Sorted: " . "<br>";
//print_r($array);
echo "<br>";
//$sorted = arsort($array);
//echo "After Sorted: " . "<br>";
//print_r($array);

//foreach ($array as &$sorted) {
//    sort($sorted["assets"]);
//}
//print_r($array);


if($array[2] == true)
{
    $sorted = asort($array);
}
foreach ($array as &$sorted){
    sort($sorted["assets"]);
}
print_r($array);


?>

</body>
</html>
