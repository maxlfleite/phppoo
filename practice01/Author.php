<?php 
class Author {
    private $id;
    private $name;
    private $email;
    public function __construct($id, $name, $email){
        $this->setId($id);
        $this->setName($name);
        $this->setEmail($email);
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getInfo(){
        return "Autor: {$this->name}<br> Email: {$this->email}";
    }
}
?>