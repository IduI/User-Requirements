<!DOCTYPE html>
<html>
    
    <head>
        <title>Casa da Bicicleta</title>
        <meta charset="utf-8">
        <meta name="description" content="Casa da Bicicleta">
        <meta name="keywords" content="Bicicleta, Peças, Oficina"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/styles.css">
    </head>

    <body>
        <header> 
            <div id="logo">
                <img id="logo_menuprincipal" src="../assets/images/logo_servicos.png" alt="Ferramentas diversas">
            </div>
            <div id="tela">
                <h1>SERVIÇOS</h1>
            </div>
        </header>

        <main>
            <div id="flex_main">
                <div id="main_esq">
                    <div id="cabecalho_main_esq">
                        <nav class="navegacao">
                            <div><a href="s_cadastrarservico.php">Cadastrar Serviços</a></div>
                            <div><a href= "s_atualizarservico.php">Atualizar Serviços</a></div>
                        </nav> 
                    </div> 
                    <div id="rodape_main_esq">
                        <nav class="navegacao">
                            <div><a href= "../index.php">Menu Inicial</a></div>
                        </nav> 
                    </div> 
                </div>
            <div id="main_dir">
                    <div id="Servicos">
                        <h1>Serviços Ativos</h1>
                        <table>
                            <tr>
                                <th>Ordem Servico</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Prazo</th>
                            </tr>
                            <div> 
                                <?php
                                    require_once "../classes/ServicoDAO.php";
                                    require_once "../classes/ClienteDAO.php";
                                    $obj = new ServicoDAO();
                                    $cli = new ClienteDAO();
                                    $lista = $obj->listar(); 
                                    
                                    if(count($lista) == 0){
                                        echo "Nenhum sabor encontrado.";
                                    }
                                    else{
                                        foreach ($lista as $despesa){
                                            echo "<tr><td>".$despesa->getCodServico()."</td><td>";
                                            $listacli = $cli->buscarPorCodigo($despesa->getCodCli()); 
                                            foreach ($listacli as $cliente){
                                                echo $cliente->getNome();
                                            }
                                            echo "</td><td>".$despesa->getDescr()."</td><td>".$despesa->getDtEntrg()."</td></tr>";
                                        }
                                    }
                                ?>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </main>

        <footer>
            <div>
                <p>© Copyright 2021. Todos os direitos reservados.  </p>
            </div>
        </footer>
    </body>

</html>
