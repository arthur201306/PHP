<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Document</title>
    </head>
    <body>
        <?php
            require_once "Pessoa.php";
            $p1 = new Pessoa();
            $p1->nome = "Arthur";
            $p1->idade = 15;
            $p1->Falar();
        ?>
    </body>
</html>