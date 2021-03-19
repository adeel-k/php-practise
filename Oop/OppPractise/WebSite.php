<?php


class WebSite
{
    public $title;
    public $link;




    public function setTitle($title){

        $this->title = $title;

    }

    public function setLink($link){

        $this->link = $link;
    }


}

$shutterstock = new WebSite();

$shutterstock->setTitle("Shutterstock");
print $shutterstock->title;
echo "<br>";

$shutterstock->setLink("https://www.shutterstock.com/search/web+cartoon");
print $shutterstock->link;
echo "<br>";
