<?php


class Books
{

    public $title;
    public $type;
    public $releaseYear;
    public $copyrights;
    public $author;

    public function __construct($title,$type,$releaseYear,$copyrights,$author){

        $this->title = $title;
        $this->type  = $type;
        $this->releaseYear = $releaseYear;
        $this->copyrights = $copyrights;
        $this->author = $author;
    }


    public function getTitle(){
        return $this->title;
    }
    public function getType(){
        return $this->type;
    }
    public function getReleaseYear(){
        return $this->releaseYear;
    }
    public function getCopyRight(){
        return $this->copyrights;
    }
    public function getAuthor(){
        return $this->author;
    }

}

$BooksObject = new Books ("Hunger games","Books","2016","true","Omer");

print  $BooksObject->title .
    "<br>";
print $BooksObject->type .
    "<br>";
print $BooksObject->releaseYear .
    "<br>";
print $BooksObject->copyrights .
    "<br>";
print $BooksObject->author .
    "<br>";
