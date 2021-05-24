<!doctype html>
<html>
    <head>
        <title>Respostaszada</title>
        <meta charset = "utf-8">
    </head>
    <body>
        <?php
            include_once "../classes/DespesaDAO.php";
            $bd = new DespesaDAO();
            $codigo = $_POST['CodD'];
            $addbd = 0;
        ?>
        <!-- Nome -->
        <p style="font-size: 50px;text-align:center ">
        <?php 
        if($_POST['CodD'] == ""){
            echo "O código da despesa não foi inserida";
        }
        else{
            $addbd+=1;
            echo "O código da despesa a ser exluida é: $codigo";
        }
        if($addbd == 1){
            $bd->excluir($codigo);
        }
        else{
            echo "<p>Dados incompletos amigo, a despesa não foi excluida do banco de dados.</p>";
        }
        ?>
        <div><a href= "u_excluirdespesa.php">Voltar</a></div>
    </body>
</html>