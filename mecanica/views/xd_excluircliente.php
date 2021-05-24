<!doctype html>
<html>
    <head>
        <title>Respostaszada</title>
        <meta charset = "utf-8">
    </head>
    <body>
        <?php
            include_once "../classes/ClienteDAO.php";
            $bd = new ClienteDAO();
            $addbd = 0;
            $codigo = $_POST['CodC'];
        ?>
        <p style="font-size: 50px;text-align:center ">
        <?php 
        if($_POST['CodC'] == ""){
            echo "O código do cliente não foi inserido";
        }
        else{
            echo "O código do cliente é: $codigo";
            $addbd +=1;
        }
        if($addbd == 1){
            $bd->excluir($codigo);
        }
        else{
            echo "<p>Não foi possível excluir, digite um código.</p>";
        }

        ?>
        <div><a href= "x_excluircliente.php">Voltar</a></div>
    </body>
</html>