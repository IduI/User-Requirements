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
            $qtd = $_POST['qtdP'];
            $nome = $_POST['NomeP'];
            $valorunit = $_POST['ValorUnitarioP'];
            $limite = $_POST['LimiteMinBaixa'];
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
        echo "<br>";
        if($_POST['qtdP'] == ""){
            echo "A quantidade não foi inserida";
        }
        else{
            echo "A quantidade de peças a ser adicionada é: $qtd";
            $addbd+=1;
        }
        echo "<br>";
        if($_POST['NomeP'] == ""){
            echo "O nome da peça não foi inserido";
        }
        else{
            echo "O nome da peça é: $nome";
            $addbd+=1;
        }
        echo "<br>";
        if($_POST['ValorUnitarioP'] == ""){
            echo "O valor da peça não foi inserido";
        }
        else{
            echo "O valor da peça é: $valorunit";
            $addbd+=1;
        }
        echo "<br>";
        if($_POST['LimiteMinBaixa'] == ""){
            echo "O limite mínimo de baixa no estoque não foi inserida";
        }
        else{
            echo "O limite mínimo de baixa no estoque é: $limite";
            $addbd+=1;
        }
        echo "<br>";
        if($addbd == 5){
            $bd->inserir($codigo,$qtd,$nome,$valorunit,$limite);
        }
        else{
            echo "<p>Dados incompletos amigo, a peca não foi adicionada ao banco de dados.</p>";
        }

        ?>
        <div><a href= "t_cadastrarproduto.php">Voltar</a></div>
    </body>
</html>