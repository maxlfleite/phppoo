<?php 
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    private $matricula;
    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }
    public function getMatricula(){
        return $this->matricula;
    }
    private $curso;
    public function setCurso($curso){
        $this->curso = $curso;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function pagarMensalidade(){
        echo "<p>Mensalidade de {$this->getNome()} paga!</p><br/>";
    }
    public function cancelarMatricula(){
        $this->matricula = null;
        $this->curso = null;
        echo "<p>Matricula cancelada</p>";
    }
    public function __construct($nome, $matricula, $curso)
    {
        $this->setNome($nome);
        $this->setMatricula($matricula);
        $this->setCurso($curso);
    }
}
?>