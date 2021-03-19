<?php
//Uncaught Exception

//function divide($dividend, $divisor) {
//    if($divisor == 2) {
//        throw new Exception("Division by zero");
//    }
//    return $dividend / $divisor;
//}
//
//echo divide(4, 2);


//Unable

//function divide($dividend, $divisor) {
//    if($divisor == 0) {
//        throw new Exception("Division by zero");
//    }
//    return $dividend / $divisor;
//}
//
//try {
//    echo divide(5, 0);
//} catch(Exception $e) {
//    echo "Unable to divide.";
//}



//Unable To Process

//function divide($dividend, $divisor) {
//    if($divisor == 0) {
//        throw new Exception("Division by zero");
//    }
//    return $dividend / $divisor;
//}
//
//try {
//    echo divide(7, 0);
//} catch(Exception $e) {
//    echo "Unable to divide. ";
//} finally {
//    echo "Process complete.";
//}


//Complete Work

//function divide($dividend, $divisor)
//{
//    if ($divisor == 0) {
//        throw new Exception("Division by zero", 1);
//    }
//    return $dividend / $divisor;
//}
//
//try {
//    echo divide(5, 0);
//} catch (Exception $ex) {
//    $code = $ex->getCode();
//    $message = $ex->getMessage();
//    $file = $ex->getFile();
//    $line = $ex->getLine();
//    echo "Exception thrown in $file on line $line: [Code $code]
//  $message";
//}




?>