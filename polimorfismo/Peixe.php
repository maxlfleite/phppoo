<?php 
require_once "Animal.php";
class Peixe extends Animal{
    private $corEscama;
    public function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }
    public function getCorEscama(){
        return $this->corEscama;
    }
    public function locomover(){
        echo "<p>Nadando</p>";
    }
    public function alimentar(){
        echo "<p>Comendo comida de peixe</p>";
    }
    public function emitirSom(){
        echo "<p>Peixe não emite som</p>";
    }
    public function soltarBolha(){
        echo "<p>Soltando bolhinhas</p>";
    }
}
?>