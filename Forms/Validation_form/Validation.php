<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<?php

         $name = $email = $gender =  $comment = "";


    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
    }

     function test_input($data){
         $data = trim($data);
         $data = stripcslashes($data);
         $data = htmlspecialchars($data);
             return $data;
    }
 ?>
        <h2>Form Validation</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         Name: <input type="text" name="name">
           <br><br>
         E-mail: <input type="text" name="email">
           <br><br>
         Comment: <textarea name="comment" rows="5" cols="40"></textarea>
           <br><br>
            Gender:
             <input type="radio" name="gender" value="female">Female
             <input type="radio" name="gender" value="male">Male
             <input type="radio" name="gender" value="other">Other
                     <br><br>
                <input type="submit" name="submit" value="Submit">

    </form>

 <?php
     print "<h2>Your Input:</h2>";
     print $name;
       echo "<br>";
     print $email;
       echo "<br>";
     print $comment;
       echo "<br>";
     print $gender;
?>

</body>
</html>
