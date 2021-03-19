<br><br>
<center>
DateTime:<input type="date" name="DateTime" value="<?php echo $Date; ?>">
<span class="error">* <?php echo $Date;?></span>

<br><br>
<P> DATE</P>
<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>
<br><br>
<P>TIME ZONE</P>
<?php
date_default_timezone_set("Africa/New_York");
echo "The time is Africa " . date("h:i:sa");
?>
<br><br>
<p> MKTIME</p>
<?php
$d=mktime(5, 14, 54, 2, 3, 2021);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>
<br><br>
<p> STRTOTIME</p>
<?php
$d=strtotime( date("Y/m/d"));

print_r(date(""));
echo "Created date is " . date("Y-m-d", $d);
?>

</center>
