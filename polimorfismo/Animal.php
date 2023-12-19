<?php 
abstract class Animal
{
    private $peso;
    private $idade;
    private $membros;
    
    public function __construct($peso, $idade, $membros){
        $this->peso = $peso;
        $this->idade = $idade;
        $this->membros = $membros;
    }
    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();
    public function getPeso()
    {
        return $this->peso;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getMembros(){
        return $this->membros;
    }
    public function setPeso($peso){
        $this->peso = $peso;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function setMembros($membros){
        $this->membros = $membros;
    }
}

?>