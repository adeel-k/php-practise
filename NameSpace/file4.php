<?php

    namespace bike;

    include  'file1.php';
    include  'file2.php';
    include  'file3.php';


    use car ;
    use computer ;
    use mobile;
    use bike;


\car\Corola::says();
print "<br>";
\computer\Hp::says();
print "<br>";
\mobile\Samsung::says();
print "<br>";