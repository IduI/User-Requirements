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
                <img id="logo_menuprincipal" src="../assets/images/logo_estoque.png" alt="Armazém com caixas dispostas em sua frente">
            </div>
            <div id="tela">
                <h1>ATUALIZAR PRODUTO</h1>
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
                            <div><a href= "t_estoque.php">Voltar</a></div>
                        </nav> 
                    </div> 
                </div>
                <div id="main_dir">
                <form id="cad_produto_form" action="t_atualizarproduto.php" method="POST">
                        <div class="justify_center">
                            <label for="Nome_consulta">Consultar produto pelo código:  </label>
                            <input type="text" id="id_produto_consulta" name="codPeca" >
                        </div>
                        <div class="justify_center">
                            <input type="submit" value="Consultar">
                        </div>
                </form>
                    <?php 
                        if(isset($_POST['codPeca']) && $_POST['codPeca'] != ''){
                            include_once "../classes/PecaDAO.php";
                            $obj = new PecaDAO();
                            $lista = $obj->buscarPorCodigo($_POST['codPeca']);
                            foreach($lista as $produto){
                            ?>
                            <!-- ua_atualizardespesa.php -->
                            <form id="cad_produto_form" action="ta_atualizarproduto.php" method="POST">
                                <div class="justify_center">
                                    <label for="Nome">Insira o código:  </label>
                                    <input type="text" id="id_nome" name="codPecaP" value="<?=$_POST['codPeca']?>">
                                </div>
                                <div class="justify_center">
                                    <label for="Telefone">Qtd Inicial: </label>
                                    <input type="text" id="id_telefone" name="qtdP" placeholder="<?= $produto->getQtd()?>">
                                </div>
                                <div class="justify_center">
                                    <label for="Telefone">Nome do produto: </label>
                                    <input type="text" id="id_telefone" name="NomeP" placeholder="<?= $produto->getNome()?>">
                                </div>
                                <div class="justify_center">
                                    <label for="datdevol">Valor unitário: </label>
                                    <input type="text" id="id_datdev" name="ValorUnitarioP" placeholder="<?= $produto->getValorUnitario()?>">
                                </div>
                                <div class="justify_center">
                                    <label for="Cidade">Limite minimo para alerta de baixa no estoque: </label>
                                    <input type="text" id="id_descr_serv" name="LimiteMinBaixaP" placeholder="<?= $produto->getValorUnitario()?>">
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
