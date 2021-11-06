<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title></title>
    </head>
    <body>
        <?php
            require_once "Login.php";

            $pessoa = new Login();
            $pessoa->setEmail("teste@gmail.com");
            $pessoa->setSenha("1234");
            $pessoa->Logar();
            echo "<br>";
            echo "Email = " . $pessoa->getEmail();
            echo "<br>";
            echo "Senha = " . $pessoa->getSenha();
        ?>
    </body>
</html>