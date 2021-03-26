<?php


    if(empty($x)) {
        echo '$x does not exist<br>';
}


    if(empty(0)) {
        echo '0 is empty<br>';
}


    if(empty(0.0)) {
        echo '0.0 is empty<br>';
}


    if(empty("")) {
        echo '"" is an empty string<br>';
}


    if(empty(null)) {
        echo 'null is empty<br>';
}


    if(empty('A')) {
        echo '"A" is empty<br>';
}
    else {
         echo '"A" is not empty<br>';
}