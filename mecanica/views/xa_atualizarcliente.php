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
            $codigo = $_POST['CodigoC'];
            $nome = $_POST['NomeC'];
            $email = $_POST['EmailC'];
            $telefone = $_POST['TelefoneC'];
            $cidade = $_POST['CidadeC'];
            $bairro = $_POST['BairroC'];
            $rua = $_POST['RuaC'];
            $numero = $_POST['NumeroC'];
           

        ?>
        <!-- Nome -->
        <p style="font-size: 50px;text-align:center ">
        <?php 
        if($_POST['CodigoC'] == ""){
            echo "O código do cliente não foi inserido";
        }
        else{
            echo "O código do a ser atualizado cliente é: $codigo";
            $addbd +=1;
        }
        if($_POST['NomeC'] == ""){
            echo "O nome do cliente não foi inserido";
        }
        else{
            echo "O nome do cliente é: $nome";
            $addbd +=1;
        }
        echo "<br>";
        if($_POST['TelefoneC'] == ""){
            echo "O telefone do cliente não foi inserido";
        }
        else{
            echo "O telefone do cliente é: $telefone";
            $addbd +=1;
        }
        echo "<br>";
        if($_POST['EmailC'] == ""){
            echo "O email do cliente não foi inserido";
        }
        else{
            echo "O email do cliente é: $email";
            $addbd +=1;
        }
        echo "<br>";
        if($_POST['CidadeC'] == ""){
            echo "A cidade do cliente não foi inserida";
        }
        else{
            echo "A cidade do cliente é: $cidade";
            $addbd +=1;
        }
        echo "<br>";
        if($_POST['BairroC'] == ""){
            echo "O bairro do cliente não foi inserido";
        }
        else{
            echo "O bairro do cliente é: $bairro";
            $addbd +=1;
        }
        echo "<br>";
        if($_POST['RuaC'] == ""){
            echo "A rua do cliente não foi inserida";
        }
        else{
            echo "A rua do cliente é: $rua";
            $addbd +=1;
        }
        echo "<br>";
        if($_POST['NumeroC'] == ""){
            echo "O numero da casa do cliente não foi inserida";
        }
        else{
            echo "O numero da casa do cliente é: $numero";
            $addbd +=1;
        }
        if($addbd == 8){
            $bd->atualizar($codigo,$nome,$email,$telefone,$cidade,$bairro,$rua,$numero);
        }
        else{
            echo "<p>Dados incompletos amigo, o cliente não foi atualizado no banco de dados.</p>";
        }

        ?>
        <div><a href= "x_atualizarcliente.php">Voltar</a></div>
    </body>
</html>