<?php 
require_once "Mamifero.php";
class Cachorro extends Mamifero {
    public function emitirSom() {
        echo "<p>Au Au Au</p>";
    }
    // Não existe sobrecarga em PHP
    // Usar metodos com nomes diferentes resolve esse "problema".
    public function reacaoFrase($frase){
        if ($frase == "Comer" || $frase == "Olá") {
            echo "<p>Inclina a cabeça e abana o rabo</p>";
        } else {
            echo "<p>Rosnar</p>";
        }
    }
    public function reacaoHora($hora, $min){
        if ($hora < 12) {
            echo "<p>Abanar o rabo</p>";
        } else if ($hora>= 18){
            echo "<p>Ignorar</p>";
        }else {
            echo "<p>Latir igual a  Tadeu</p>";
        }
    }
    public function reagirDono($dono){
        if ($dono ) {
            echo "<p>Abanar o rabo</p>";
        } else {
            echo "<p>Rosnar e latir</p>";
        }
    }
    public function reagirIdadePeso(){
        if ($this->getIdade() <= 5){
            if ($this->getPeso() <= 10){
                echo "<p>Abanar a rabeta</p>";
            } else {
                echo "<p>Rosnar e latir</p>";
            }
        } else {
            if ($this->getPeso() <= 10){
                echo "<p>Rosnar e latir</p>";
            } else {
                echo "<p>Ignorar</p>";
            }
        }
    }

}
?>