<?php



function countTo3() {
    yield "1";
    yield "2";
    yield "3";
}

foreach(countTo3() as $number) {
    echo $number;
    echo "<br>";
}
?> 