<?php 
require_once "Author.php";
class Book{
    private $id;
    private $title;
    private $author;
    private $price;
    public function __construct($id, $title, $author, $price){
        $this->setId($id);
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setPrice($price);
    }
    public function getId(){
        return $this->id;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getAuthor(){
        return $this->author;
    }
    public function getPrice(){
        return $this->price;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function setAuthor($author){
        $this->author = $author;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function getInfo(){
        return "Book: {$this->getTitle()}<br>" . $this->author->getInfo() . "<br> Price: U$ {$this->getPrice()}";
    }
}
?>