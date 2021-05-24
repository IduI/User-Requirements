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
                <img id="logo_menuprincipal" src="../assets/images/logo_clientes.png" alt="Imagem ilustrativa de perfil de três pessoas de frente, uma ao lado da outra">
            </div>
            <div id="tela">
                <h1>CLIENTES</h1>
            </div>
        </header>

        <main>
            <div id="flex_main">
                <div id="main_esq">
                    <div id="cabecalho_main_esq">
                        <nav class="navegacao">
                            <div><a href="x_atualizarcliente.php">Atualiza Cliente</a></div>
                            <div><a href= "x_cadastrarcliente.php">Cadastrar Cliente</a></div>
                            <div><a href= "x_excluircliente.php">Excluir Cliente</a></div>
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
                        <h1>Lista de Clientes</h1>
                        <table>
                            <tr>
                                <th>Código do Cliente</th>
                                <th>Nome</th>
                                <th>Telefone</th>

                            </tr>
                            <div> 
                                <?php
                                    require_once "../classes/ClienteDAO.php";
                                    $obj = new ClienteDAO();
                                    $lista = $obj->listar(); 
                                    if(count($lista) == 0){
                                        echo "Nenhum sabor encontrado.";
                                    }
                                    else{
                                        foreach ($lista as $cliente){
                                            echo "<tr><td>".$cliente->getCodCli()."</td><td>".$cliente->getNome()."</td><td>".$cliente->getTelefone()."</td></tr>";
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