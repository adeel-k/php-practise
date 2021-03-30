<?php


$number = 1234.56;
setlocale(LC_MONETARY,"de_DE");
echo money_format("%.2n", $number);
?> 