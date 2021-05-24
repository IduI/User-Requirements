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
            $descricao = $_POST['DescricaoD'];
            $valor = $_POST['ValorD'];
            $prazo = $_POST['PrazoD'];
            $recorr = $_POST['RecorrD'];
            $addbd = 0;
        ?>
        <!-- Nome -->
        <p style="font-size: 50px;text-align:center ">
        <?php 
        if($_POST['DescricaoD'] == ""){
            echo "A descrição da despesa não foi inserida";
        }
        else{
            $addbd+=1;
            echo "A descrição da despesa é: $descricao";
        }
        echo "<br>";
        if($_POST['ValorD'] == ""){
            echo "O valor da despesa não foi inserido";
        }
        else{
            echo "O valor da despesa é: $valor";
            $addbd+=1;
        }
        echo "<br>";
        if($_POST['PrazoD'] == ""){
            echo "O prazo da despesa não foi inserido";
        }
        else{
            echo "O prazo da despesa é: $prazo";
            $addbd+=1;
        }
        echo "<br>";
        if($_POST['RecorrD'] == ""){
            echo "Não foi informado se a despesa é ou não recorrente";
        }
        else{
            echo "O limite mínimo de baixa no estoque é: $recorr";
            $addbd+=1;
        }
        echo "<br>";
        if($addbd == 4){
            $bd->inserir($descricao,$valor,$prazo,$recorr);
        }
        else{
            echo "<p>Dados incompletos amigo, a despesa não foi adicionada ao banco de dados.</p>";
        }


        ?>
        <div><a href= "u_cadastrardespesa.php">Voltar</a></div>
    </body>
</html>