<?php 
/*
* Código de exemplo da utilização de CSV como persistencia
* Página reponsável pela listagem da entidade Pessoa
* @author Wesley R. Bezerra <wesley.bezerra@ifc.edu.br>
* @version 0.1
*
*/

require_once "noticia_acao.php";
?>
<!DOCTYPE html>
<html lang="en">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<body>
    <main class="container">
        <?php include 'navbaradm.php'; ?>
        <table role="grid">
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Resumo</th>
                <th>Texto</th>
                <th>Autor</th>
                <th>Tags</th>
                <th>Alterar</th>
                <th>Excluir</th>
            </tr>
            <?php
            $dados = ler_csv('noticias.csv');
            if(($dados == NULL) || (count($dados)==0)){
                echo "<h1>sem noticias a serem exibidas</h1>";
            }
            foreach ($dados as $key)
                echo "<tr><td>{$key['id']}</td>
                  <td>{$key['titulo']}</td>
                  <td>{$key['resumo']}</td>
                  <td>{$key['texto']}</td>
                  <td>{$key['autor']}</td>
                  <td>{$key['tags']}</td>
                  <td align='center'><a role='button' class='waves-effect waves-light btn' href='noticia_cad.php?id=" . $key['id'] . "';>Alterar</a></td>
                  <td align='center'><a role='button' class='waves-effect waves-light btn' href=javascript:excluirRegistro('noticia_acao.php?acao=excluir&id=" . $key['id'] . "');>Excluir</a></td>
              </tr>";
            ?>
        </table>
    </main>
    <!-- funcao de confirmacacao em javascript para a exclusao-->
    <script>
        function excluirRegistro(url) {
            if (confirm("Confirmar Exclusão?"))
                location.href = url;
        }
    </script>
</body>

</html>