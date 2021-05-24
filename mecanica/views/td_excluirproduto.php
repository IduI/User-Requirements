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
            $codigo = $_POST['codPecaP'];
        ?>
        <!-- Nome -->
        <p style="font-size: 50px;text-align:center ">
        <?php 
        if($_POST['codPecaP'] == ""){
            echo "O código da peça não foi inserido";

        }
        else{
            echo "O código da peça é: $codigo";
            $addbd+=1;
        }
        if($addbd == 1){
            $bd->excluir($codigo);
        }
        else{
            echo "<p>Dados incompletos amigo, a peca não foi excluida do banco de dados.</p>";
        }

        ?>
        <div><a href= "t_excluirproduto.php">Voltar</a></div>
    </body>
</html>