<?php 
require_once "Video.php";
require_once "Gafanhoto.php";
class Visualizacao{
    private $espectador;
    private $filme;
    public function __construct($espectador, $filme){
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews()+1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido()+1);
    }
    public function avaliar(){
        $this->filme->setTotAvaliacoes($this->filme->getTotAvaliacoes()+1);
        $this->filme->setAvaliacoes(5);
    }
    public function avaliarNota($nota){
        $this->filme->setTotAvaliacoes($this->filme->getTotAvaliacoes()+1);
        $this->filme->setAvaliacoes($nota);
    }
    public function avaliarPorc($porc){
        $this->filme->setTotAvaliacoes($this->filme->getTotAvaliacoes()+1);
        if ($porc <= 40){
            $this->filme->setAvaliacoes(4);
        } elseif ($porc <= 60){ 
            $this->filme->setAvaliacoes(6);
        } elseif ($porc <= 80){
            $this->filme->setAvaliacoes(8);
        } else {
            $this->filme->setAvaliacoes(10);
        }
    }
    public function getEspectador(){
        
        return $this->espectador;
    }
    public function getFilme(){
        return $this->filme;
    }
    public function setEspectador($espectador){
        $this->espectador = $espectador;
    }
    public function setFilme($filme){
        $this->filme = $filme;
    }
}
?>