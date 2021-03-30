<?php


$str = "This is some php&lt;&gt;/php&lt; text.";
print htmlspecialchars_decode($str);


?>

echo "<br>";
<?php


$str = "This is some &lt;php&gt;/php&gt; text.";
print htmlspecialchars_decode($str);
