<?php

  $a = 89;
  $b = 45;
  function addition(){

      $GLOBALS['d'] = $GLOBALS['a'] + $GLOBALS['b'];
  }

  addition();

echo $d;

