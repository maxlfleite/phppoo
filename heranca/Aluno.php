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
    public function cancelarMatricula(){
        $this->matricula = null;
        echo "<p>Matricula cancelada</p>";
    }
}
?>