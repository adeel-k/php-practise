<?php

 $pattern = "/^C/";
 $names = array("Jhon Carter", "Clark Kent", "John Rambo");
 $matches = preg_grep($pattern, $names);

      foreach ($matches as $match) {
           echo $match . "<br>";
  }