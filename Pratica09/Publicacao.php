<?php 
interface Publicacao{
    public function abrir();
    public function fechar();
    public function folear($p);
    public function avancarPg();
    public function voltarPG();
}

?>