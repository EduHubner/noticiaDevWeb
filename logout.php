<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
    <?php
    if (isset($_GET["error"])) {
        echo "<h1>Usuário/senha inválido!</h1>";
    }
    ?>
    <div class="container">
        <form method="post" action="login_acao.php">
            <p>Deseja realmente deslogar da conta?</p>
            <input type="submit" name="acao" value="Logout"/>
            <input type="submit" name="acao" value="Cancelar"/>
        </form>
    </div>
</body>
</html>