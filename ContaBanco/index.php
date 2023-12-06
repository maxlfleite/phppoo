<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Max Fuleragi</title>
</head>
<body>
    <pre>
    <?php 
    require_once("ContaBanco.php");
    $p1 = new ContaBanco();
    $p1->setNumConta(1122);
    $p1->abrirConta("CC");
    $p1->setDono("Jubileu");
    $p1->depositar(300);

    $p2 = new ContaBanco();
    $p2->setNumConta(6969);
    $p2->abrirConta("CP");
    $p2->setDono("Creuza");
    $p2->depositar(500);
    $p2->sacar(100);

    print_r($p1);
    print_r($p2);
    ?>
    </pre>
</body>
</html>