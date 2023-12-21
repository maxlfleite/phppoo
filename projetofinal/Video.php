<?php 
require_once "AcoesVideo.php";
class Video implements AcoesVideo{
    private $titulo;
    private $avaliacoes;
    private $views;
    private $curtidas;
    private $reproduzindo;
    private $totAvaliacoes;
    public function __construct($titulo, $avaliacoes = 0, $totAvaliacoes=0, $views = 0, $curtidas = 0, $reproduzindo = false){
        $this->titulo = $titulo;
        $this->avaliacoes = $avaliacoes;
        $this->totAvaliacoes = $totAvaliacoes;
        $this->views = $views;
        $this->curtidas = $curtidas;
        $this->reproduzindo = $reproduzindo;
    }
    public function play(){
        $this->reproduzindo = true;
    }
    public function pause(){
        $this->reproduzindo = false;
    }
    public function like(){
        $this->curtidas++;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function getAvaliacoes(){
        return $this->avaliacoes;
    }
    public function setAvaliacoes($avaliacoes){
        $media = ($this->avaliacoes + $avaliacoes)/$this->getTotAvaliacoes();
        $this->avaliacoes = $media;
    }
    public function getViews(){
        return $this->views;
    }
    public function setViews($views){
        $this->views = $views;
    }
    public function getCurtidas(){
        return $this->curtidas;
    }
    public function setCurtidas($curtidas){
        $this->curtidas = $curtidas;
    }
    public function getReproduzindo(){
        return $this->reproduzindo;
    }
    public function setReproduzindo($reproduzindo){
        $this->reproduzindo = $reproduzindo;
    }
    public function getTotAvaliacoes(){
        return $this->totAvaliacoes;
    }
    public function setTotAvaliacoes($totAvaliacoes){
        $this->totAvaliacoes = $totAvaliacoes;
    }
}
?>