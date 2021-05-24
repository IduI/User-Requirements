<!doctype html>
<html>
    <head>
        <title>Respostaszada</title>
        <meta charset = "utf-8">
    </head>
    <body>
        <?php
            include_once "../classes/PecaDAO.php";
            $bd = new PecaDAO();
            $addbd = 0;
            $codigo = $_POST['codPecaE'];
            $qtd = $_POST['qtdE'];
        ?>
        <!-- Nome -->
        <p style="font-size: 50px;text-align:center ">
        <?php 
        if($_POST['codPecaE'] == ""){
            echo "O código da peça não foi inserido";

        }
        else{
            echo "O código da peça é: $codigo";
            $addbd+=1;
        }
        echo "<br>";
        if($_POST['qtdE'] == ""){
            echo "A quantidade não foi inserida";

        }
        else{
            echo "A quantidade a ser somada no estoque da peça é: $qtd";
            $addbd+=1;
        }
        if($addbd == 2){
            $bd->atualizaQtdSubtrai($codigo,$qtd);
        }
        else{
            echo "<p>Dados incompletos amigo, a peca não foi excluida do banco de dados.</p>";
        }

        ?>
        <div><a href= "v_vendas.php">Voltar</a></div>
    </body>
</html>