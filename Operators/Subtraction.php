//PHP Arithmetic Operators

<body>
<form>
    Enter First Number:
                    <input type="number" name="number1"/><br><br>
    Enter Second Number:
                    <input type="number" name="number2"/><br><br>

                <input type="submit" name="submit" value="Subtract">

</form>
</body>

<?php

    @$number1=$_GET['number1'];
    @$number2=$_GET['number2'];
    for($i=1;$i<=$number2;$i++)
    {
        $number1--;
    }
    print "Difference=".$number1;
