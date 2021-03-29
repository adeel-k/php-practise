<?php
$str = "Albert Einstein said: &#039;E=MC&sup2;&#039;";
echo html_entity_decode($str, ENT_COMPAT); // Will only convert double quotes
echo "<br>";
echo html_entity_decode($str, ENT_QUOTES); // Converts double and single quotes
echo "<br>";
echo html_entity_decode($str, ENT_NOQUOTES); // Does not convert any quotes
?> 