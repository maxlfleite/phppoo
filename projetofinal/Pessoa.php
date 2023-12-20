<?php 
abstract class Pessoa{
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;
    public function __construct($nome, $idade, $sexo, $experiencia = 0){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = $experiencia;
    }
    protected function ganharExp($xp){
        $this->experiencia += $xp;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function setSexo($sexo){
        $this->sexo = $sexo;
    }
    public function getExperiencia(){
        return $this->experiencia;
    }
    public function setExperiencia($experiencia){
        $this->experiencia = $experiencia;
    }
}
?>