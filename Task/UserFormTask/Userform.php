<!DOCTYPE HTML>
<html>

<body>
<center>

<h2>User Data Form</h2>

    <form method="POST" action="Userform2.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    FirstName:<input type="text" name="firstname" value="<?php echo $firstname;?>">
    <span class="error">* <?php echo $firstname;?></span>
    LastnNme: <input type="text" name="lastname" value="<?php echo $lastname;?>">
    <span class="error">* <?php echo $lastname;?></span>
    <br><br>
    CntactNum:<input type="text" name="contactNum" value="<?php echo $contactNum;?>">
    <span class="error">* <?php echo $contactNum;?></span>
    Address: <input type="text" name="address" value="<?php echo $address;?>">
    <span class="error">* <?php echo $address;?></span>
    <br><br>
    NicNum:  <input type="text" name="Nicnum" value="<?php echo $Nicnum;?>">
    <span class="error">* <?php echo $Nicnum;?></span>
    Email:   <input type="text" name="email" value="<?php echo $email?>">
    <span class="error">* <?php echo $email;?></span>
    <br><br>
    DateTime:<input type="date" name="DateTime" value="<?php echo $Date; ?>">
    <span class="error">* <?php echo $Date;?></span>
    <br><br>
    Gender:
    <input type="checkbox"  name="gender" <?php if (isset($gender) && $gender=="female")
        echo"checked";?>    value="female">Female
    <input type="checkbox"  name="gender" <?php if (isset($gender) && $gender=="male")
        echo"checked";?>    value="male">Male
    <input type="checkbox"  name="gender" <?php if (isset($gender) && $gender=="other")
        echo"checked";?>    value="other">Other
    <span class="error">* <?php echo $gender;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
echo$firstname;
echo "<br>";
echo$lastname;
echo "<br>";
echo$contactNum;
echo "<br>";
echo$address;
echo "<br>";
echo$Nicnum;
echo "<br>";
echo$email;
echo "<br>";
echo$gender;
?>




</body>
</html>
</center>
