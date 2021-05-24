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
            $codigo = $_POST['CodigoD'];
            $descricao = $_POST['DescrD'];
            $valor = $_POST['ValorD'];
            $prazo = $_POST['PrazoValidadeD'];
            $recorr = $_POST['RecorrD'];
            $addbd = 0;
        ?>
        <!-- Nome -->
        <p style="font-size: 50px;text-align:center ">
        <?php 
        if($_POST['CodigoD'] == ""){
            echo "O código da despesa não foi inserida";
        }
        else{
            $addbd+=1;
            echo "O código da despesa é: $codigo";
        }
        if($_POST['DescrD'] == ""){
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
        if($_POST['PrazoValidadeD'] == ""){
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
        if($addbd == 5){
            $bd->atualizar($codigo,$descricao,$valor,$prazo,$recorr);
        }
        else{
            echo "<p>Dados incompletos amigo, a despesa não foi atualizada no banco de dados.</p>";
        }
        ?>
        <div><a href= "u_atualizardespesa.php">Voltar</a></div>
    </body>
</html>