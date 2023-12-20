<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php 
    require_once "Mamifero.php";
    require_once "Reptil.php";
    require_once "Peixe.php";
    require_once "Ave.php";
    require_once "Goldfish.php";
    require_once "Arara.php";
    require_once "Kanguro.php";
    require_once "Cachorro.php";
    require_once "Tartaruga.php";
    require_once "Cobra.php";
    require_once "Lobo.php";

    $mamifero = array();
    $reptil = array();
    $peixe = array();
    $ave = array();
    $kanguru = array();
    $cachorro = array();
    $tartaruga = array();
    $cobra = array();
    $goldfish = array();
    $arara = array();
    $lobo = array();



    //$mamifero[0] = new Mamifero(85, 7, 4);
    //$mamifero[0]->setCorPelo("branco");
    //$mamifero[0]->locomover();
    //$mamifero[0]->alimentar();
    //$mamifero[0]->emitirSom();
    //print_r($mamifero[0]);

    //$reptil[0] = new Reptil(6.5, 3, 0);
    //$reptil[0]->locomover();
    //$reptil[0]->alimentar();
    //$reptil[0]->emitirSom();
    //print_r($reptil[0]);

    //$kanguru[0] = new Kanguro(70, 8, 4);
    //$kanguru[0]->locomover();
    //$kanguru[0]->alimentar();
    //$kanguru[0]->emitirSom();
    //print_r($kanguru[0]);

    $cachorro[0] = new Cachorro(16, 3, 4);
    $cachorro[0]->locomover();
    $cachorro[0]->alimentar();
    $cachorro[0]->emitirSom();
    $cachorro[0]->reagirIdadePeso();

    $lobo[0] = new Lobo(15, 3, 4);
    $lobo[0]->locomover();
    $lobo[0]->alimentar();
    $lobo[0]->emitirSom();
    

    //print_r($cachorro[0]);
    ?>
    </pre>
</body>
</html>