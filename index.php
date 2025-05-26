<?php
    session_start();
    $navbar = "navbar";
    if (isset($_SESSION["usuario"])) {
        $navbar = "navbaradm";
    }
    include "noticia_acao.php";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <title>Noticias</title>
</head>
<body>
    <div class="container"> 
        <?php include $navbar . ".php"; ?>
        <div class="row">
            <?php
            $dados = ler_csv('noticias.csv');
            if(($dados == NULL) || (count($dados)==0)){
                echo "<h1>sem Noticias a serem exibias</h1>";
            }
            foreach ($dados as $key)
                echo "
                <div class='col s12 m4'>
                <div class='card medium'>
                    <div class='card-image'>
                    <img src='{$key['imagem']}'>
                    </div>
                    <div class='card-content'>
                    <span class='card-title'>{$key['titulo'] }</span>
                    <p>{$key['resumo']}</p>
                    </div>
                    <div class='card-action'>
                    <a href=noticia.php?id=" . $key['id'] . ">Ler Mais</a>
                    </div>
                </div>
                </div>
                ";
            ?>
        </div>
        <?php 
            include "footer.php";
        ?>
    </div>
</body>
</html>