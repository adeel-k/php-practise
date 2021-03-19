<!DOCTYPE html>
<html>
<body>
<center>
<h2>DATA GENERATED 1st</h2>

<?php
$PD = array (
    array("Rizwan",21,1999),
    array("Owais",20,2000),
    array("Saad",17,2006),

);

echo $PD[0][0].": Age: ".$PD[0][1].", Date oF Birth: ".$PD[0][2].".<br>";
echo $PD[1][0].": Age: ".$PD[1][1].", Date oF Birth: ".$PD[1][2].".<br>";
echo $PD[2][0].": Age: ".$PD[2][1].", Date oF Birth: ".$PD[2][2].".<br>";

?>
</center>
<center>

    <h2>DATA GENERATED 2nd</h2>
<?php

$PE = array (
    array("Abdullah","Fee 4500"),
    array("Anas","Fee 7000"),
    array("Hussain","Fee 3000"),
    array("Hamza","Fee 5000"),
    array("Khuram","Fee 5500"),

);

echo $PE[0][0].": Eighth Class:".$PE[0][1].", Standard School:   ".".<br>";
echo $PE[1][0].": Six Class:    ".$PE[1][1].", Islamabad School: ".".<br>";
echo $PE[2][0].": Seven Class: ".$PE[2][1].",  Lahore School:    ".".<br>";
echo $PE[3][0].": Four Class: ".$PE[3][1].",  Karachi School:    ".".<br>";
echo $PE[4][0].": Five Class: ".$PE[4][1].", Larkana School:    ".".<br>";

?>
</center>


<center>

    <h2>DATA GENERATED 3rd</h2>

    <?php

    $SW = array (
        array("Civic","Fee 4000"),
        array("Mehran","Fee 3000"),
        array("Suzuki","Fee 1000"),
        array("Hilux","Fee 600"),
        array("Coaster","Fee 800"),

    );

    echo $SW[0][0].": School Wean services: ".$SW[0][1].", Standard School:   ".".<br>";
    echo $SW[1][0].": School Wean services: ".$SW[1][1].", Islamabad School: ".".<br>";
    echo $SW[2][0].": School Wean services: ".$SW[2][1].", Lahore School:    ".".<br>";
    echo $SW[3][0].": School Wean services: ".$SW[3][1].", Karachi School:    ".".<br>";
    echo $SW[4][0].": School Wean services: ".$SW[4][1].", Larkana School:    ".".<br>";

    ?>
</center>

