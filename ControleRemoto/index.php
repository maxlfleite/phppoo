<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Remoto</title>
</head>
<body>
    <h1>Análise do Controle Remoto</h1>
    <pre>
    <?php
    // Algoritmo no Discord
    require_once "ControleRemoto.php";
    $cr = new ControleRemoto;
    $cr -> ligar();
    $cr -> play();
    $cr -> maisVolume();
    $cr -> maisVolume();
    $cr -> maisVolume();
    $cr -> AbrirMenu();
    $cr -> fecharMenu();
    print_r($cr);
    ?>
    </pre>
</body>
</html>