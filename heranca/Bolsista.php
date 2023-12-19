<?php 
require_once "Aluno.php";

class Bolsista extends Aluno{
    private $bolsa;
    public function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }
    public function getBolsa(){
        return $this->bolsa;
    }
    public function renovarBolsa(){
        echo "<p>Bolsa de {$this->getNome()} renovada.</p>";
    }
    public function pagarMensalidade(){
        echo "<p>{$this->getNome()} é bolsista. Paga com {$this->getBolsa()} de descontos!</p><br/>";
    }
}
?>