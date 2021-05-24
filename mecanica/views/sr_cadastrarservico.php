<!doctype html>
<html>
    <head>
        <title>Respostaszada</title>
        <meta charset = "utf-8">
    </head>
    <body>
        <?php
            include_once "../classes/ServicoDAO.php";
            $bd = new ServicoDAO();
            $addbd = 0;
            $codCli = $_POST['codCli'];
            $dtRcb = $_POST['dtRcb'];
            $dtEntrg = $_POST['dtEntrg'];
            $descr = $_POST['descr'];
            $orcamento = $_POST['orcamento'];
            $maodeobra = $_POST['maodeobra'];
           

        ?>
        <!-- Nome -->
        <p style="font-size: 50px;text-align:center ">
        <?php 
        if($_POST['codCli'] == ""){
            echo "O código do cliente não foi inserido";
        }
        else{
            echo "O código do cliente é: $codCli";
            $addbd +=1;
        }
        echo "<br>";
        if($_POST['dtRcb'] == ""){
            echo "A data de recebimento do servico não foi inserida";
        }
        else{
            echo "A data de recebimento do serviço é: $dtRcb";
            $addbd +=1;
        }
        echo "<br>";
        if($_POST['dtEntrg'] == ""){
            echo "A data de entrega do serviço não foi inserida";
        }
        else{
            echo "A data de entrega do serviço é: $dtEntrg";
            $addbd +=1;
        }
        echo "<br>";
        if($_POST['descr'] == ""){
            echo "A descrição do servico não foi inserida";
        }
        else{
            echo "A descrição do serviço é: $descr";
            $addbd +=1;
        }
        echo "<br>";
        if($_POST['orcamento'] == ""){
            echo "O orçamento do serviço não foi inserido";
        }
        else{
            echo "O orçamento do serviço é: $orcamento";
            $addbd +=1;
        }
        echo "<br>";
        if($_POST['maodeobra'] == ""){
            echo "A mao de obra do serviço não foi inserida";
        }
        else{
            echo "A mao de obra do serviço é: $maodeobra";
            $addbd +=1;
        }
        echo "<br>";
        
        if($addbd == 6){
            $bd->inserir($codCli,$dtRcb,$dtEntrg,$descr,$orcamento,$maodeobra);
        }
        else{
            echo "<p>Dados incompletos amigo, o serviço não foi adicionado ao banco de dados.</p>";
        }

        ?>
        <div><a href= "s_cadastrarservico.php">Voltar</a></div>
    </body>
</html>