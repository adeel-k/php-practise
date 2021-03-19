<!DOCTYPE HTML>
<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>

</head>
<body>
<CENTER>
<?php

// define variables and set to empty values
$UserData=[];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $UserData[0]=$_POST["name"];
    $UserData[1]=$_POST["email"];
    $UserData[2]=$_POST["contactnum"];
    $UserData[3]=$_POST["Address"];
    $UserData[4]=$_POST["gender"];

    //print_r($contactDetail);

    foreach (UserData as $value){
        echo "$value <br>";
    }
}


?>

<h2>User Data Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $name;?></span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $email;?></span>
    <br><br>
    ContactNum: <input type="text" name="contactnum" value="<?php echo $contactnum;?>">
    <span class="error">* <?php echo $contactnum;?></span>
    <br><br>
    Address: <input type="text" name="Address" value="<?php echo $Address;?>">
    <span class="error">*<?php echo $Address;?></span>
    <br><br>
    Gender:
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
    <span class="error">* <?php echo $gender;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $Address;
echo "<br>";
echo $gender;
?>

</body>
</html>
</Center>




