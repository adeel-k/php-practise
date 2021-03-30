<?php


$num1 = 123456789;
$num2 = -123456789;
$char = 50; // The ASCII Character 50 is 2

// Note: The format value "%%" returns a percent sign
echo sprintf("%%b = %b", $num1) . "<br>"; // Binary number
echo sprintf("%%c = %c", $char) . "<br>"; // The ASCII Character
echo sprintf("%%d = %d", $num1) . "<br>"; // Signed decimal number
echo sprintf("%%d = %d", $num2) . "<br>"; // Signed decimal number
echo sprintf("%%e = %e", $num1) . "<br>"; // Scientific notation (lowercase)
echo sprintf("%%E = %E", $num1) . "<br>"; // Scientific notation (uppercase)
echo sprintf("%%u = %u", $num1) . "<br>"; // Unsigned decimal number (positive)
echo sprintf("%%u = %u", $num2) . "<br>"; // Unsigned decimal number (negative)
echo sprintf("%%f = %f", $num1) . "<br>"; // Floating-point number (local settings aware)
echo sprintf("%%F = %F", $num1) . "<br>"; // Floating-point number (not local sett aware)
echo sprintf("%%g = %g", $num1) . "<br>"; // Shorter of %e and %f
echo sprintf("%%G = %G", $num1) . "<br>"; // Shorter of %E and %f
echo sprintf("%%o = %o", $num1) . "<br>"; // Octal number
echo sprintf("%%s = %s", $num1) . "<br>"; // String
echo sprintf("%%x = %x", $num1) . "<br>"; // Hexadecimal number (lowercase)
echo sprintf("%%X = %X", $num1) . "<br>"; // Hexadecimal number (uppercase)
echo sprintf("%%+d = %+d", $num1) . "<br>"; // Sign specifier (positive)
echo sprintf("%%+d = %+d", $num2) . "<br>"; // Sign specifier (negative)
