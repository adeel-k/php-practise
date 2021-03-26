<?php




function countTo4() {
    yield from [1, 2, 3];
    yield 4;
}

foreach(countTo4() as $number) {
    echo $number;
    echo "<br>";
}
?> 