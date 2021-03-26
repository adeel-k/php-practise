<?php

    function printFormated(callable $format, $str){
        echo $format($str);
        echo "<br>";
    }

    function exclaim($str) {return $str . "!";}
    printFormated("exclaim", "hello islamabad");