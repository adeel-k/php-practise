<?php

    setcookie("user", "Sonoo");
  ?>
<html>
<body>
<?php
    if(!isset($_COOKIE["user"])) {

        echo "Sorry, cookie is not found!";
    } else {
         echo "<br/>Cookie Value: " . $_COOKIE["user"];
}
?>
</body>
</html>