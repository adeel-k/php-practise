
<?php

$a = (false && foo());
$b = (true  || foo());
$c = (false and foo());
$d = (true  or  foo());


$e = false || true;

$f = false or true;

var_dump($e, $f);


$g = true && false;

$h = true and false;

var_dump($g, $h);
?>
