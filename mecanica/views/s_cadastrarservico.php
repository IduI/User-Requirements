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
                <h1>CADASTRAR SERVIÇO</h1>
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
                            <div><a href= "s_servicos.php">Voltar</a></div>
                        </nav> 
                    </div> 
                </div>
                <div id="main_dir">
                    <form id="cad_produto_form" action="s_cadastrarservico.php" method="POST">
                        <div class="justify_center">
                            <label for="Nome_consulta">Consultar cliente pelo código:  </label>
                            <input type="text" id="id_Cliente_consulta" name="codCliente" >
                        </div>
                        <div class="justify_center">
                            <input type="submit" value="Consultar">
                        </div>
                    </form>
                    <?php 
                        if(isset($_POST['codCliente']) && $_POST['codCliente'] != ''){
                            include_once "../classes/ClienteDAO.php";
                            $obj = new ClienteDAO();
                            $lista = $obj->buscarPorCodigo($_POST['codCliente']);
                            foreach($lista as $cliente){
                            ?>
                            <!-- ua_atualizarcliente.php -->
                            <form id="cad_produto_form" action="sr_cadastrarservico.php" method="POST">
                                <div class="justify_center">
                                    <label for="Nome_consulta">Código do Cliente:  </label>
                                    <input type="text" id="id_codCli" name="codCli" value="<?=$_POST['codCliente']?>">
                                </div>
                                <div class="justify_center">
                                    <label for="Nome_consulta">Data de recebimento:  </label>
                                    <input type="text" id="id_dtRcb" name="dtRcb" >
                                </div>
                                <div class="justify_center">
                                    <label for="Nome_consulta">Data de entrega:  </label>
                                    <input type="text" id="id_dtEntrg" name="dtEntrg" >
                                </div>
                                <div class="justify_center">
                                    <label for="Nome">Descrição:  </label>
                                    <input type="text" id="id_desct" name="descr">
                                </div>
                                <div class="justify_center">
                                    <label for="Telefone">Orçamento estimado:</label>
                                    <input type="text" id="id_orcamento" name="orcamento">
                                </div>
                                <div class="justify_center">
                                    <label for="Cidade">Mão de obra: </label>
                                    <input type="text" id="id_maoDeObra" name="maodeobra">
                                </div>
                                <div class="justify_center">
                                    <input type="submit" value="Cadastrar">
                                </div>
                            </form>
                        <?php
                            }
                        }
                        ?>

                
                    <!-- <form id="cad_servico_form" name="cadastraservico" action="sr_cadastraservico.php" method="post">
                        
                        <div class="justify_center">
                            <input type="button" value="Consultar">
                        </div>
                        <div class="justify_center">
                            <label for="Nome">Nome do Cliente:  </label>
                        </div>
                        <div class="justify_center">
                            <label for="Telefone">Telefonedo Cliente: </label>
                        </div>
                        <div class="justify_center">
                            <label for="datdevol">Data de entrega: </label>
                            <input type="text" id="id_datdev" name="datdev">
                        </div>
                        <div class="justify_center">
                            <label for="Cidade">Descrição do serviço: </label>
                            <input type="text" id="id_descr_serv" name="descr_serv">
                        </div>
                        <div class="justify_center">
                            <label for="Orcamento">Valor de orçamento estimado : </label>
                            <input type="text" id="id_orcamento" name="orcamento_serv">
                        </div>
                        <div class="justify_center">
                            <label for="Orcamento">Mão de obra: </label>
                            <input type="text" id="id_orcamento" name="orcamento_serv">
                        </div>

                        <div class="justify_center">
                            <input type="submit" value="Confirmar">
                        </div>
                    </form> -->
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
