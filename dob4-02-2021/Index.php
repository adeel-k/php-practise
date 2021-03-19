<html>
<head>
    <title>How to calculate age by date of birth using PHP Programming</title>
<Center>  <?php include  "header.php";?>
    <br>
<body>
<div class="san1">
    <form method="post" action="dob.php" style="width: 400px; margin: 0 auto;">
        Select Your DOB <input type="date" value="<?php echo date('Y-m-d') ?>" name="date2"  min="1898-12-30" max="2021-12-30" >
        <input type="submit" name="submit" value="calculate">
    </form>
          <br>


<?php include "footer.php"; ?><br>


</div>
</body>
</html>
</Center>