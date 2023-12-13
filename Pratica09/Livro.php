<?php 
require_once "Pessoa.php";
require_once "Publicacao.php";
class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $paginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    public function detalhes() {
        echo "<hr><ul>
        <li> Titulo: {$this->getTitulo()}</li>
        <li> Autor: {$this->getAutor()}</li>
        <li> Págias: {$this->getPaginas()}</li>
        <li> Leitor Atual: {$this->leitor->getNome()}</li>

        </ul>";
    }
    function abrir(){
        $this->aberto = true;
    }
    function fechar(){
        $this->aberto = false;
    }
    function folear($p){
        if ($p>$this->paginas){
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }
    function avancarPg(){
        $this->pagAtual++;
    }
    function voltarPG(){
        $this->pagAtual--;
    }
    public function __construct(
        $titulo, $autor, $paginas, $leitor){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->paginas = $paginas;
        $this->leitor = $leitor;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function getPaginas(){
        return $this->paginas;
    }
    public function getPagAtual(){
        return $this->pagAtual;
    }
    public function getAberto(){
        return $this->aberto;
    }
    public function getLeitor(){
        return $this->leitor;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function setAutor($autor){
        $this->autor = $autor;
    }
    public function setPagAtual($pagAtual){
        $this->pagAtual = $pagAtual;
    }
    public function setAberto($aberto = false){
        $this->aberto = $aberto;
    }
    public function setLeitor($leitor){
        $this->leitor = $leitor;
    }
}
?>