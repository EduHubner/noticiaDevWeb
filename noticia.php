<?php
include "noticia_acao.php";

$id = isset($_GET['id']) ? $_GET['id'] : 0;
if ($id != 0) {
    $noticia = carregar($id);
} else {
    echo "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA";
}

$navbar = "navbarnoticia";

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
    <title>Noticia</title>
</head>
<body>
    <form action="noticia_acao.php" method="post">
       <div class="container">
       <?php include $navbar . ".php"; ?>

            <div class="col s12 m8 offset-m2 l6 offset-l3">
                <div class="card-panel grey lighten-5 z-depth-1">
                <div class="row valign-wrapper">
                    <div class="col s4">
                    <img src="<?php echo $noticia['imagem']; ?>" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                    </div>
                    <div class="col s8">
                    <span class="black-text">
                        <h1><?php echo $noticia['titulo']; ?></h1>
                        <h5><?php echo $noticia['resumo']; ?></h5>
                    </span>
                    </div>
                </div>
                </div>
            </div>

            <div class="col s12 m8 offset-m2 l6 offset-l3">
                <div class="card-panel grey lighten-5 z-depth-1">
                <div class="row valign-wrapper">
                    <div class="col s12">
                    <span class="black-text">
                        <?php echo $noticia['texto']; ?>
                    </span>
                    </div>
                </div>
                </div>
            </div>

            <div class="col s12 m8 offset-m2 l6 offset-l3">
                <div class="card-panel grey lighten-5 z-depth-1">
                <div class="row valign-wrapper">
                    <div class="col s12">
                    <span class="black-text">
                        <h5>Autor: <?php echo $noticia['autor']; ?></h5>
                        <h5>Tags: <?php echo $noticia['tags']; ?></h5>
                    </span>
                    </div>
                </div>
                </div>
            </div>

       </div>
    </form>
</body>
</html>