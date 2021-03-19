<?php

namespace tax4;

include  'Tax1.php';
include  'Tax2.php';
include  'Tax3.php';


use tax1 ;
use tax2;
use tax3;
use tax4;


\tax1\Car::says();
print "<br>";
\tax2\Home::says();
print "<br>";
\tax3\Net::says();
print "<br>";