<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Final</title>
</head>
<body>
    <pre>
    <?php
    require_once "Video.php";
    require_once "Gafanhoto.php";
    require_once "Visualizacao.php";
    $video=[];
    $video[0] = new Video("Meu primeiro vídeo");
    $video[1] = new Video("Meu segundo vídeo");
    $video[2] = new Video("Meu terceiro vídeo");
    //print_r($video);

    $gafanhoto = [];
    $gafanhoto[0] = new Gafanhoto("Max Leite", 40, "M", "maxlfleite");
    $gafanhoto[1] = new Gafanhoto("Luana Ribeiro", 35, "F", "felivet");
    //print_r($gafanhoto);
    $visualizacao = [];
    $visualizacao[0] = new Visualizacao($gafanhoto[0], $video[0]);
    $visualizacao[1] = new Visualizacao($gafanhoto[1], $video[1]);
    $visualizacao[2] = new Visualizacao($gafanhoto[1], $video[2]);
    $visualizacao[3] = new Visualizacao($gafanhoto[0], $video[2]);
    $visualizacao[2]->avaliarPorc(90);
    $visualizacao[3]->avaliar();
    print_r($visualizacao);
    ?>
    </pre>
</body>
</html>