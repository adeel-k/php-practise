<html>
<body>


    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
       Email: <input type="email" name="fname">
        <input type="submit">
  </form>
<?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_REQUEST['fname'];
          if (empty($name)){
              echo "Name is empty";
           }else{
             echo $name;
    }
}
?>
</body>
</html>



<?php


