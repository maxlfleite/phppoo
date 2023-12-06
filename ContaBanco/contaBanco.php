<?php 
class ContaBanco{
    //Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    //Metodos especiais (tentar fazer os métodos especiais primeiro, pois precisaremos deles para fazer os métodos normais)
    public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
    }
    public function getNumConta(){
        return $this->numConta;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function getDono(){
        return $this->dono;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setNumConta($n){
        $this->numConta = $n;
    }
    public function setTipo($t){
        $this->tipo = $t;
    }
    public function setDono($d){
        $this->dono = $d;
    }
    public function setSaldo($s){
        $this->saldo = $s;
    }
    public function setStatus($stts){
        $this->status = $stts;
    }
    //Métodos
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC"){
            $this->setSaldo(50);
        } else if ($t == "CP"){
            $this->setSaldo(150);
        }
    }

    public function fecharConta(){
        if ($this->getSaldo() > 0){
            echo "<p>Conta com dinheiro</p>";
        } elseif ($this->getSaldo() < 0){
            echo "<p>Conta em débito</p>";
        }else {
            $this->setStatus(false);
        }
    }

    public function depositar($v) {
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $v);
        } else {
            echo "<p>Conta fechada</p>";
        }
    }
    public function sacar($v){
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $v){
                $this->setSaldo($this->getSaldo() - $v);
            } else {
                echo "<p>Saldo insuficiente</p>";
            }
        } else {
            echo "<p>Conta fechada</p>";
        }
    }
    public function pagarMensal(){
        $v = 0;
        if ($this->tipo == "CC"){
            $v = 12;
        } else if ($this->tipo == "CP"){
            $v = 20;
        }
        if ($this->getStatus()){
            if ($this->getSaldo() > $v){
                $this->setSaldo($this->getSaldo() - $v);
            } else {
                echo "<p>Saldo insuficiente</p>";
            }
        } else {
            echo "<p>Conta fechada</p>";
        }
    }

} 
?>