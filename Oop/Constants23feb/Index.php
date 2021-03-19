<?php
class web {
    const LEAVING_MESSAGE = "Thank you for visiting WebSite";
    public function webSite() {
        echo self::LEAVING_MESSAGE;
    }
}

$web = new web();
$web->webSite();
?> 