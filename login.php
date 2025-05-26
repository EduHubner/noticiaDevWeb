<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <?php
    if (isset($_GET["error"])) {
        echo "<h1>Usuário/senha inválido!</h1>";
    }
    ?>
    <div class="container">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://unpkg.com/marx-css/css/marx.min.css">
        <form method="post" action="login_acao.php">
            <h3>Realize o login:</h3>
            <input name="usuario" type="text" placeholder="usuário"/>
            <input name="senha" type="password" placeholder="senha"/>
            <input type="submit" name="acao" value="Login"/>
            <input type="submit" name="acao" value="Cancelar"/>
        </form>
    </div>
</body>
</html>