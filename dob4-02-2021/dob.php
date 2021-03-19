
<?php include  "header.php";?>

<?php
if(isset($_POST["submit"]))
{
$date1=$_POST['date2'];

$hours_in_day   = 24;
$minutes_in_hour= 60;
$seconds_in_mins= 60;

$birth_date     = new DateTime("$date1");
$current_date   = new DateTime();

$diff           = $birth_date->diff($current_date);
?>
<div class = "san"> <strong>Age in Years: </strong><?php echo $years     = $diff->y . " years " . $diff->m . " months " . $diff->d . " day(s)"; echo "<br/>"; ?></div>
<div class = "san"> <strong>Age in Months: </strong><?php echo $months    = ($diff->y * 12) + $diff->m . " months " . $diff->d . " day(s)"; echo "<br/>";?></div>
<div class = "san"> <strong>Age in Weeks: </strong><?php echo $weeks     = floor($diff->days/7) . " weeks " . $diff->d%7 . " day(s)"; echo "<br/>";?></div>
<div class = "san"> <strong>Age in Days: </strong><?php echo $days      = $diff->days . " days"; echo "<br/>";?></div>
<div class = "san"> <strong>Age in Hours: </strong><?php echo $hours     = $diff->h + ($diff->days * $hours_in_day) . " hours"; echo "<br/>";?></div>
<div class = "san"> <strong>Age in Minutes: </strong><?php echo $mins      = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour) . " minutest"; echo "<br/>";?></div>
<div class = "san"> <strong>Age in Seconds: </strong> <?php echo $seconds   = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour * $seconds_in_mins) . " seconds"; echo "<br/>";?></div>
<br><br>
<?php

    include "footer.php";
}
