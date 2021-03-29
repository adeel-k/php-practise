<?php
$str = "Who's Peter Griffin?";
echo $str . " This is not safe in a database query.<br>";
echo addslashes($str) . " This is safe in a database query.";
