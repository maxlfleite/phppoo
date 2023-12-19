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

    $aluno1 = new Aluno();
    $aluno1 -> setNome("Max");
    $aluno1 -> setMatricula("123456789");
    $aluno1 -> setCurso("PHP");
    $aluno1 -> setIdade(42);
    $aluno1 -> setSexo("M");

    print_r($aluno1);
    ?>
    </pre>
</body>
</html>