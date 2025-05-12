<?php 
/*
* Código de exemplo da utilização de CSV como persistencia
* Página reponsável pelo formulário de cadastro da entidade Pessoa
* @author Wesley R. Bezerra <wesley.bezerra@ifc.edu.br>
* @version 0.1
*
*/
?>
<!DOCTYPE html>
<html lang="en">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<?php
include "noticia_acao.php";
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$dados = array();
if ($id != 0)
    $dados = carregar($id);
?>

<body>
    <header class="container">
        <?php include 'navbaradm.php'; ?>
    </header>
    <main class="container">

        <form action="noticia_acao.php" method="post">
            <fieldset>
                <legend>Cadastro de Noticia</legend>

                <label for="id">Id</label>
                <input type="text" name="id" id="id" value="<?= $id ?>" readonly><br>

                <label for="titulo">Titulo</label>
                <input type="text" size="40" name="titulo" id="titulo" value="<?php if ($id != 0)
                    echo $dados['titulo']; ?>" required><br>

                <label for="resumo">Resumo</label>
                <input type="text" name="resumo" id="resumo" value="<?php if ($id != 0)
                    echo $dados['resumo']; ?>"><br>

                <label for="texto">Texto</label>
                <input type="text" name="texto" id="texto" value="<?php if ($id != 0)
                    echo $dados['texto']; ?>"><br>

                <label for="autor">Autor</label>
                <input type="text" name="autor" id="autor" value="<?php if ($id != 0)
                    echo $dados['autor']; ?>"><br>

                <label for="tags">Tags</label>
                <input type="text" name="tags" id="tags" value="<?php if ($id != 0)
                    echo $dados['tags']; ?>"><br>  

                <button class="btn waves-effect waves-light" type="submit" name="acao" id="acao" value="<?php if ($id == 0)
                    echo "Salvar";
                else
                    echo "Alterar";
                ?>">Salvar
                </button>
                <button class="btn waves-effect waves-light" type="reset">Cancelar</button>

            </fieldset>
        </form>
    </main>
    <footer class="container"></footer>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>