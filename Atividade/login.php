<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login de Acesso</title>
    
</head>
<body>
    <form name="login" method="post" action="">
        <center><caption>LOGIN</caption>
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" maxlength="40" required>
    
        </p>
        <p>
            <label for="email">E-mail:</label>
            <input type="email" name="email" maxlength="30">
        </p>
        <p> <label for="senha">Senha:</label>
            <input type="password" name ="senha"> 
        </p>
        <p>
            <input type="submit" name="enviar" value="Enviar">
        </p>
        </table>
    </form>
    <?php
        if(isset($_POST["enviar"]))
        {
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            session_start();
            $_SESSION["nome"] = $nome;
            $_SESSION["email"] = $email;
            $_SESSION["senha"] = $senha;
        }
    ?>
    <p><a href="index.html"><input type="button" value="Voltar"></a></p></center>
</body>
</html>