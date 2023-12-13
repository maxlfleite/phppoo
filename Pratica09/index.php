<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Livro</title>
</head>
<body><pre>
    <?php 
    require_once "Pessoa.php";
    require_once "Livro.php";
    $p = array();
    $l = array();
    $p[0] = new Pessoa("Max", 40, "M");
    $p[1] = new Pessoa("Luana", 35, "F");

    $l[0] = new Livro("Código Davince", "Dan Brown", 378, $p[0]);
    $l[1] = new Livro("PHP Básico", "Gustavo Guanabara", 300, $p[0]);
    $l[2] = new Livro("Medicina Felina", "Luana Paula", 945, $p[1]);

    //print_r($l[1]);
    $l[2]->detalhes();
    ?>
    </pre>
</body>
</html>