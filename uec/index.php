<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UEC</title>
</head>
<body>
    
    <?php
    // Relacionamento entre classes 
    require_once "Fighter.php";
    require_once "Luta.php";
    $f = array();
    $f[0] = new Fighter("Prety Boy", "França", 30, 1.75, 58.9, 11, 2, 1);
    
    $f[1] = new Fighter("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);

    $f[2] = new Fighter("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);

    $f[3] = new Fighter("DeadCode", "Austrália", 28, 1.93, 81.6, 13, 0, 2);

    $f[4] = new Fighter("UFOCobol","Brasil", 37, 1.70, 119.3, 5, 4, 3);

    $f[5] = new Fighter("Nerdaart", "Holanda", 30, 1.81, 105.7, 12, 2, 4);

    $uec01 = new Luta();
    $uec01->marcarLuta($f[4], $f[5]);
    $uec01->lutar();
    $f[0]->status();
    $f[1]->status();
    ?> 
</body>
</html>