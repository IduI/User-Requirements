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
                <img id="logo_menuprincipal" src="../assets/images/logo_despesas.png" alt="Caderneta com sifrão de dinheiro estampada">
            </div>
            <div id="tela">
                <h1>ATUALIZAR DESPESA</h1>
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
                            <div><a href= "u_despesas.php">Voltar</a></div>
                        </nav> 
                    </div> 
                </div>
                <div id="main_dir">
                    <form id="cad_produto_form" action="u_atualizardespesa.php" method="POST">
                        <div class="justify_center">
                            <label for="Nome_consulta">Consultar despesa pelo código:  </label>
                            <input type="text" id="id_despesa_consulta" name="codDespesa" >
                        </div>
                        <div class="justify_center">
                            <input type="submit" value="Consultar">
                        </div>
                    </form>
                        <?php 
                            if(isset($_POST['codDespesa']) && $_POST['codDespesa'] != ''){
                                include_once "../classes/DespesaDAO.php";
                                $obj = new DespesaDAO();
                                $lista = $obj->buscarPorCodigo($_POST['codDespesa']);
                                foreach($lista as $despesa){
                                ?>
                                <!-- ua_atualizardespesa.php -->
                                <form id="cad_produto_form" action="ua_atualizardespesa.php" method="POST">
                                    <div class="justify_center">
                                        <label for="Nome_consulta">Código:  </label>
                                        <input type="text" id="id_nome_consulta" name="CodigoD" value="<?=$_POST['codDespesa']?>">
                                    </div>
                                    <div class="justify_center">
                                        <label for="Nome">Descrição:  </label>
                                        <input type="text" id="id_nome" name="DescrD" placeholder="<?= $despesa->getDescr()?>">
                                    </div>
                                    <div class="justify_center">
                                        <label for="Nome">Valor:  </label>
                                        <input type="text" id="id_email" name="ValorD" placeholder="<?= $despesa->getValor()?>">
                                    </div>
                                    <div class="justify_center">
                                        <label for="Telefone">Prazo de validade(Ex:2020-12-30): </label>
                                        <input type="text" id="id_telefone" name="PrazoValidadeD" placeholder="<?= $despesa->getPrazoValidade()?>">
                                    </div>
                                    <div class="justify_center">
                                        <label for="Cidade">É recorrente? (1=sim, 0=não): </label>
                                        <input type="text" id="id_descr_serv" name="RecorrD" placeholder="<?= $despesa->getRecorr()?>">
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
