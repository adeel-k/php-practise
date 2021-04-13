<?php

  $pattern = "/\s/";
  $replacement = "-";
  $text = "Earth revolves around\nthe\tSun";

     print preg_replace($pattern, $replacement,$text);
      echo "<br>";
     print str_replace(" ", "-", $text);