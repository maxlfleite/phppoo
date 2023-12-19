<?php 
require_once "Animal.php";
class Reptil extends Animal{
    public function locomover(){
        echo "<p>Rastejando</p>";
    }
    public function alimentar(){
        echo "<p>Comendo comida de réptil</p>";
    }
    public function emitirSom(){
        echo "<p>Som de Reptil</p>";
    }
    private $corEscama;
    public function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }
    public function getCorEscama(){
        return $this->corEscama;
    }
    
}
?>