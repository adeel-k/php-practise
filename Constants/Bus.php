<?php

class Bus{
    const LEAVING_MESSAGE = "Thank you for traveling";
    public  function passenger(){
        print self::LEAVING_MESSAGE;
    }

}

$driver = new Bus();
$driver->passenger();