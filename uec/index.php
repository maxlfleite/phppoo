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
    $f = array();
    $f[0] = new Lutador("Prety Boy", "França", 30, 1.75, 60.2, 11, 2, 1);
    $f[0]->status();
    $f[0]->apresentar();
    $f[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
    ?>
</body>
</html>