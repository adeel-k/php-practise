<?php
$favcolor = "blue";
echo $favcolor."<br>";
const NAME="SRMD";
echo NAME.PHP_EOL;
$favcolor ="yellow";
echo $favcolor."<br>";

//Switch
switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!"."<br>";
        break;
    case "blue":
        echo "Your favorite color is blue!"."<br>";
        break;
    case "green":
        echo "Your favorite color is green!"."<br>";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!"."<br>";
}

//////If else
if($favcolor=="yellow")
{
    echo("My favourite colour is yellow")."<br>";
}
else if($favcolor=="red")
{
    echo("My favourite colour is red")."<br>";

}

?> 