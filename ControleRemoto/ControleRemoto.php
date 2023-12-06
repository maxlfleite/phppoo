<?php 
require_once "Controlador.php";
class ControleRemoto implements Controlador{
    // Atributos
    private $volume;
    private $ligado;
    private $tocando;

    // Métodos Especiais
    public function __construct(){
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    public function setVolume($v){
        return $this->volume = $v;
    }
    public function setLigado($l){
        return $this->ligado = $l;
    }
    private function setTocando($t){
        return $this->tocando = $t;
    }
    private function getVolume(){
        return $this->volume;
    }
    private function getLigado(){
        return $this->ligado;
    }
    private function getTocando(){
        return $this->tocando;
    }
    public function ligar(){
        $this->setLigado(true);
    }
    public function desligar(){
        $this->setLigado(false);
    }
    public function abrirMenu(){
        
        echo "<br>Está ligado?: " . ($this->getLigado()?"SIM":"NÃO");
        echo "<br>Está tocando?: " . ($this->getTocando()?"SIM":"NÃO");
        echo "<br>VOLUME: " . $this->getVolume();
        for ($i = 0; $i <= $this->getVolume(); $i+=10) {
            echo "|";
        }
        echo "<br>";
    }
    public function fecharMenu(){
        echo "<br><p>Fechando Menu...</p>";
    }
    public function maisVolume(){
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume()+5);
        }
    }
    public function menosVolume(){
        if ($this->getLigado()){
            $this->setVolume($this->getVolume()-5);
        }
    }
    public function ligarMudo(){
        if ($this->getLigado() && $this->getVolume()>0){
            $this->SetVolume(0);
        }
    }
    public function desligarMudo(){
        if ($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }
    public function play(){
        if (($this->getLigado()) && ($this->getTocando() == false)){
            $this->setTocando(true);
        }
    }
    public function pause(){
        if (($this->getLigado()) && ($this->getTocando())){
            $this->setTocando(false);
        }
    }
}
?>