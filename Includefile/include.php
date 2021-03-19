<!DOCTYPE html>
<html>
<body>
<?php
echo '<a href="Home.php">Home.php</a> -
<a href="/html/default.asp">AboutUs</a> -
<a href="/css/default.asp">CotactUs</a> ';
?>
<h1>Welcome to my home page!</h1>
<p>Some text.</p>
<p>Some more text.</p>
<?php include 'footer.php';?>



<h1>Welcome to my home page!</h1>
<?php include 'vars.php';
echo "I have a $color $car.";
?>


<h1>Welcome to my home page!</h1>
<?php include 'noFileExists.php';
echo "I have a $color $car.";
?>

<h1>Welcome to my home page!</h1>
<?php require 'noFileExists.php';
echo "I have a $color $car.";
?>

<?php
echo readfile("webdictionary.txt");
?>
</body>
</html>
