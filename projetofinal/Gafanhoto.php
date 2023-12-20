<?php 
require_once "Pessoa.php";
class Gafanhoto extends Pessoa{
    private $login;
    private $totAssistido;
    public function viuMaisUm(){
        $this->totAssistido++;
    }
    public function getLogin(){
        return $this->login;
    }
    public function setLogin($login){
        $this->login = $login;
    }
    public function getTotAssistido(){
        return $this->totAssistido;
    }
    public function setTotAssistido($totAssistido){
        $this->totAssistido = $totAssistido;
    }
    public function __construct($nome, $idade, $sexo, $login, $experiencia = 0, $totAssistido = 0){
        parent::__construct($nome, $idade, $sexo, $experiencia);
        $this->login = $login;
        $this->totAssistido = $totAssistido;
    }
}
?>