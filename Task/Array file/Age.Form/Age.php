<?php
$today =$_POST["age"]?? "";
$message="";
switch($today){
    case "16":
        $message= "Osama age is a 16 Years";
        break;
    case "Osama dfb":
        $message="Date of Birth 4-04-2004";
        break;
    case "20":
        $message= "wardut age is a 20 Years.";
        break;
    case "wardut dfb":
        $message="Date of Birth 4-04-2001";
        break;
    case "18":
        $message= "Tahir is a 18 years.";
        break;
    case "Tahir dfb":
        $message="Date of Birth 1-15-2004";
        break;
    case "21":
        $message= "Bilal is a 21years.";
        break;
    case "Bilal dfb":
        $message="Date of Birth 8-9-1999";
        break;

    case "30":
        $message= "Omer is a 30 years.";
        break;

    case "Omer dfb":
        $message="Date of Birth 9-12-1991";
        break;
    default:
        $message=  "No information available for that Age.";
        break;
}
?>
<h2> Age Calculate</h2>
<form method="post">
Age: <input type="text" name="age">
<span class="error"> <?php echo $message;?></span>
<br><br>
<input type="submit" name="submit" value="Submit;">
</form>



