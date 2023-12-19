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
    require_once 'Aluno.php';
    require_once 'Professor.php';
    require_once 'Funcionario.php';
    require_once 'Visitante.php';
    require_once 'Bolsista.php';

    $aluno1 = new Aluno("Max", "123456789", "PHP");
    $aluno1 -> setIdade(42);
    $aluno1 -> setSexo("M");
    $aluno1 -> pagarMensalidade();

    $vis1 = new Visitante("Aparecido", 12, "M");

    $bolsista1 = new Bolsista("Floki", "111222333", "JavaScript");
    $bolsista1-> setIdade(8);
    $bolsista1-> setSexo("M");
    $bolsista1-> setBolsa("15%");
    $bolsista1-> renovarBolsa();
    $bolsista1-> pagarMensalidade();

    print_r($aluno1);
    print_r($vis1);
    print_r($bolsista1);
    ?>
    </pre>
</body>
</html>