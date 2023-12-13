<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice from ChatGPT</title>
</head>
<body>
    <h1>Practice from ChatGPT</h1>
    <?php
    require_once "Book.php";
    require_once "Author.php";

    $author = array();
    $book = array();

    $author[0] = new Author ("01", "Dan Brown", "danbrown@example.com");
    $book[0] = new Book ("101", "Da'Vince Code", $author[0], 39.99);

    $author[1] = new Author ("02", "Carlos Ruiz Zafón", "carlosruiz@example.com");
    $book[1] = new Book ("308", "The Shadow of the Wild", $author[1], 29.99);

    $author[2] = new Author ("03", "Harper Lee", "leeharper@example.com");
    $book[2] = new Book ("562", "To Kill a Mockingbird", $author[2], "35.90");

    $author[3] = new Author("04", "George Orwell", "gegeorwell@example.com");
    $book[3] = new Book ("666", "1984", $author[3], "Free");




    //echo "<br>" . $author[0]->getInfo() . "\n";
    echo "<br>" . $book[0]->getInfo() . "\n";
    echo "<hr>". $book[1]->getInfo() . "\n";
    echo "<hr>". $book[2]->getInfo() . "\n";
    echo "<hr>". $book[3]->getInfo() . "\n";
    ?>
</body>
</html>