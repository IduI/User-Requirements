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
                <img id="logo_menuprincipal" src="../assets/images/logo_vendas.png" alt="Caixa com etiqueta de preço sendo entregue">
            </div>
            <div id="tela">
                <h1>VENDAS</h1>
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
                            <div><a href= "../index.php">Menu Principal</a></div>
                        </nav> 
                    </div> 
                </div>
                <div id="main_dir_att_estoque">
                    <div class="justify_center">
                        <div id="Servicos">
                            <h1>Catálogo</h1>
                            <table>
                                <tr>
                                    <th>Código</th>
                                    <th>Nome</th>
                                    <th>Quantidade</th>
                                </tr>
                                <div> 
                                    <?php
                                        require_once "../classes/PecaDAO.php";
                                        $obj = new PecaDAO();
                                        $lista = $obj->listar(); 
                                        
                                        if(count($lista) == 0){
                                            echo "Nenhum sabor encontrado.";
                                        }
                                        else{
                                            foreach ($lista as $despesa){

                                                echo "<tr><td>".$despesa->getCodPeca()."</td><td>".$despesa->getNome()."</td><td>".$despesa->getQtd()."</td></tr>";
                                            }
                                        }
                                    ?>
                                </div>
                            </table>
                        </div>
                    </div>
                    <form id="cad_servico_form" action="ve_vende.php" method="POST">
                        <div class="justify_center">
                            <label for="Nome_consulta">Digite o código do produto que deseja vender:  </label>
                            <input type="text" id="id_nome_consulta" name="codPecaE">
                        </div>
                        <div class="justify_center">
                            <label for="Nome_consulta">Digite a quantidade de itens que deseja vender: </label>
                            <input type="text" id="id_nome_consulta" name="qtdE">
                        </div>
                        <div class="justify_center">
                            <input type="submit" value="Confirmar">
                        </div>
                    </form>
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
