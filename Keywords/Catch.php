<?php


try {
    $rand = rand(0,2);
    switch ($rand) {
        case 0:
            throw new Exception();
        case 1:
            throw new OutOfBoundsException();
        case 2:
            throw new LogicException();

    }
}   catch (OutOfBoundsException $e) {
    print "Caught an out of bonus exception";

   }catch (LogicException $e) {
    print "Caught a logic exception";

   }catch (Exception $e) {
   print  "Caught an ordinary exception";

}






