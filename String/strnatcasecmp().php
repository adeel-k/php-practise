<?php


    $arr1 = $arr2 = array("pic1","pic2","pic10","pic01","pic100","pic20","pic30","pic200");
        echo "Standard string comparison"."<br>";
        usort($arr1,"strcmp");

            print_r($arr1);
            echo "<br>";

                echo "Natural order string comparison"."<br>";
                usort($arr2,"strnatcmp");

                print_r($arr2);
?> 