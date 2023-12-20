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
    $video=[];
    $video[0] = new Video("Meu primeiro vídeo");
    $video[1] = new Video("Meu segundo vídeo");
    $video[2] = new Video("Meu terceiro vídeo");
    print_r($video);

    $gafanhoto = [];
    $gafanhoto[0] = new Gafanhoto("Max Leite", 40, "M", "maxlfleite");
    $gafanhoto[1] = new Gafanhoto("Luana Ribeiro", 35, "F", "felivet");
    print_r($gafanhoto);
    ?>
    </pre>
</body>
</html>