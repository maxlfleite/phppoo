<?php 
class Lutador{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates){
        $this -> setNome($nome);
        $this -> setNacionalidade ($nacionalidade);
        $this -> setIdade($idade);
        $this -> setAltura($altura);
        $this -> setPeso($peso);
        $this -> setVitorias($vitorias);
        $this -> setDerrotas($derrotas);
        $this -> setEmpates($empates);
        $this -> setDerrotas($derrotas);
}
public function getNome(){
    return $this->nome;
}
public function getNacionalidade(){
    return $this->nacionalidade;
}
public function getIdade(){
    return $this->idade;
}
public function getAltura(){
    return $this -> altura;
}
public function getPeso(){
    return $this -> peso;
}
public function getCategoria(){
    return $this -> categoria;
}
public function getVitorias(){
    return $this -> vitorias;
}
public function getDerrotas(){
    return $this -> derrotas;
}
public function getEmpates(){
    return $this -> empates;
}
public function setNome($nome){
    $this -> nome = $nome;
}
public function setNacionalidade($nacionalidade){
    $this -> nacionalidade = $nacionalidade;
}
public function setIdade($idade){
    $this -> idade = $idade;
}
public function setAltura($altura){
    $this -> altura = $altura;
}
public function setPeso($peso){
    $this -> peso = $peso;
    $this -> setCategoria();
}
public function setCategoria(){
    if ($this -> peso < 52.2){
        $this -> categoria = "Inválido";
    } elseif ($this -> peso <= 70.3){
        $this -> categoria = "Peso Leve";
    } elseif ($this -> peso <= 83.9){
        $this -> categoria = "Peso Médio";
    } elseif ($this -> peso <= 120.2){
        $this -> categoria = "Peso Pesado";
    } else {
        $this -> categoria = "Inválido";
    }    
    }
public function setVitorias($vitorias){
    $this -> vitorias = $vitorias;
}
public function setDerrotas($derrotas){
    $this -> derrotas = $derrotas;
}
public function setEmpates($empates){
    $this -> empates = $empates;
}
public function ganharLuta(){
    $this -> setVitorias($this -> getVitorias()+1);
}
public function perderLuta(){
    $this -> setDerrotas ($this -> getDerrotas()+1);
}
public function empatarLuta(){
    $this -> setEmpates ($this -> getEmpates()+1);
}
public function apresentar(){
    echo "<p>Lutador: ", $this -> getNome(), "</p>";
    echo "<p>Origem: ", $this -> getNacionalidade(), "</p>";
    echo "<p>Idade: ", $this -> getIdade(), " anos </p>";
    echo "<p>", $this -> getAltura(), " m de altura </p>";
    echo "<p>Vitorias: ", $this -> getVitorias(), "</p>";
    echo "<p>Derrotas: ", $this -> getDerrotas(), "</p>";
    echo "<p>Empates: ", $this -> getEmpates(), "</p>";
}
public function status (){
    echo "<p>{$this->getNome()} é da categoria {$this -> getCategoria()} e tem um cartel de {$this -> getVitorias()} vitórias, {$this -> getDerrotas()} derrotas e {$this -> getEmpates()} empates.</p>";
}
}
?>