<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO</title>
</head>
<body>
    <?php 
    require_once 'Caneta.php';
    /*
    $c1 = new Caneta;
    $c1->modelo = "BIC Cristal";
    $c1->cor = "Azul";
    
    //$c1->tampar();
    //$c1->rabiscar();

    $c2 = new Caneta;
    $c2->setModelo('BIC');
    $c2->setPonta(0.5);

    print "Eu tenho uma caneta {$c2->getModelo()} de ponta {$c2->getPonta()}";
                            */
    $c3 = new Caneta("Azul", "Monblanc", 1.5, 100);
    

    echo "<pre>";
    print_r($c3);
    echo "</pre>";
    ?>
</body>
</html>
<?php 

?>