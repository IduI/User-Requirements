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
                <h1>ATUALIZAR CLIENTE</h1>
            </div>
        </header>

        <main>
            <div id="flex_main">
                <div id="main_esq">
                    <div id="cabecalho_main_esq">
                        <nav class="navegacao">
                        </nav> 
                    </div> 
                    <div id="rodape_main_esq">
                        <nav class="navegacao">
                            <div><a href= "x_clientes.php">Voltar</a></div>
                        </nav> 
                    </div> 
                </div>
                <div id="main_dir">
                    <form id="cad_produto_form" action="x_atualizarcliente.php" method="POST">
                        <div class="justify_center">
                            <label for="Nome_consulta">Consultar pessoa pelo código:  </label>
                            <input type="text" id="id_nome_consulta" name="codCliC" >
                        </div>
                        <div class="justify_center">
                            <input type="submit" value="Consultar">
                        </div>
                    </form>
                    <?php 
                        if(isset($_POST['codCliC']) && $_POST['codCliC'] != ''){
                            include_once "../classes/ClienteDAO.php";
                            $obj = new ClienteDAO();
                            $lista = $obj->buscarPorCodigo($_POST['codCliC']);
                            foreach($lista as $cliente){
                            ?>
                            
                            <form id="cad_produto_form" action="xa_atualizarcliente.php" method="POST">
                                <div class="justify_center">
                                    <label for="Nome_consulta">Código:  </label>
                                    <input type="text" id="id_nome_consulta" name="CodigoC" value="<?=$_POST['codCliC']?>">
                                </div>
                                <div class="justify_center">
                                    <label for="Nome">Nome:  </label>
                                    <input type="text" id="id_nome" name="NomeC" placeholder="<?= $cliente->getNome()?>">
                                </div>
                                <div class="justify_center">
                                    <label for="Nome">Email:  </label>
                                    <input type="text" id="id_email" name="EmailC" placeholder="<?= $cliente->getEmail()?>">
                                </div>
                                <div class="justify_center">
                                    <label for="Telefone">Telefone: </label>
                                    <input type="text" id="id_telefone" name="TelefoneC" placeholder="<?= $cliente->getTelefone()?>">
                                </div>
                                <div class="justify_center">
                                    <label for="Cidade">Cidade: </label>
                                    <input type="text" id="id_descr_serv" name="CidadeC" placeholder="<?= $cliente->getCidade()?>">
                                </div>
                                <div class="justify_center">
                                    <label for="Nairro">Bairro: </label>
                                    <input type="text" id="id_bairro" name="BairroC" placeholder="<?= $cliente->getBairro()?>">
                                </div>
                                <div class="justify_center">
                                    <label for="Nua">Rua: </label>
                                    <input type="text" id="id_rua" name="RuaC" placeholder="<?= $cliente->getRua()?>">
                                </div>
                                <div class="justify_center">
                                    <label for="Numero">Numero: </label>
                                    <input type="text" id="id_numero" name="NumeroC" placeholder="<?= $cliente->getNumero()?>">
                                </div>
                                <div class="justify_center">
                                    <input type="submit" value="Atualizar">
                                </div>
                            </form>
                        <?php
                            }
                        }
                        ?>
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
