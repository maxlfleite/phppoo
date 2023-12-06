<?php 
require_once "Fighter.php";
class Luta{
    // Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    //Métodos
    public function marcarLuta($f1, $f2){
        if ($f1->getCategoria() === $f2->getCategoria() && ($f1 != $f2)){
        $this -> aprovada =  true;
        $this -> desafiado = $f1;
        $this -> desafiante = $f2;
    } else {
        $this -> aprovada = false;
        $this -> desafiante = null;
        $this -> desafiado = null;
    }
    }
    public function lutar(){
        if ($this->getAprovada() == true){
            $this -> desafiado -> apresentar();
            $this -> desafiante -> apresentar();
            $vencedor = rand(0,2);
            switch ($vencedor){
                case 0: // Empate
                    echo "<p>Luta empatada</p>";
                    $this-> desafiado->empatarLuta();
                    $this -> desafiante-> empatarLuta();
                    break;
                case 1: // Desafiado Vence
                    echo "<p>{$this-> desafiado->getNome()} venceu!</p>";
                    $this -> desafiado -> ganharLuta();
                    $this -> desafiante -> perderLuta();
                    break;
                case 2: // Desafiante Vence
                    echo "<p>{$this-> desafiante -> getNome()} venceu</p>";
                    $this -> desafiado -> perderLuta();
                    $this -> desafiante -> ganharLuta();
                    break;
            }
        } else {
            echo "<p>Luta não pode acontecer</p>";
        }
    }
    // Métodos Especiais
    public function getDesafiado(){
        return $this -> desafiado;
    }
    public function getDesafiante(){
        return $this -> desafiante;
    }
    public function getRounds(){
        return $this -> rounds;
    }
    public function getAprovada(){
        return $this -> aprovada;
    }
    public function setDesafiado($desafiado){
        $this -> desafiado = $desafiado;
    }
    public function setDesafiante($desafiante){
        $this -> desafiante = $desafiante;
    }
    public function setRounds($rounds){
        $this -> rounds = $rounds;
    }
    public function setAprovada($aprovada){
        $this -> aprovada = $aprovada;
    }
}
?>