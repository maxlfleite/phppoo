<?php 
class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar() {
        if ($this->tampada == true){
            echo "<p><strong>ERRO!</strong> Não posso rabiscar!</p>";
        } else {
            echo "<p>Estou rabiscando...</p>";
        }
    }
    public function tampar() {
        $this->tampada = true;
        echo"<p>Estou tampado...</p>";
    }
    public function destampar() {
        $this->tampada = false;
        echo "<p>Estou destampado...</p>";
    }

//Aula 04. Métodos getter, setter, construct

    public function __construct($c, $m, $p, $carg) {
        $this->cor = $c;
        $this->modelo = $m;
        $this->ponta = $p;
        $this->carga = $carg;
        $this->tampar();
}
    public function getModelo() {
        return $this->modelo;
}
    public function setModelo($m) {
        $this->modelo = $m;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p) {
        $this->ponta = $p;
    }
}

?>