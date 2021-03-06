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
                <h1>CADASTRAR DESPESA</h1>
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
                    <form id="cad_produto_form" action="ur_cadastradespesa.php" method="POST" name="Despesa" onsubmit="validatorDespesa()">
                        <div class="justify_center">
                            <label for="Nome">Descrição da despesa:  </label>
                            <input type="text" id="id_Descricao" name="DescricaoD">
                        </div>
                        <div class="justify_center">
                            <label for="Telefone">Valor: </label>
                            <input type="text" id="id_Valor" name="ValorD">
                        </div>
                        <div class="justify_center">
                            <label for="datdevol">Prazo (EX: 2020-12-05): </label>
                            <input type="text" id="id_Prazo" name="PrazoD">
                        </div>
                        <div class="justify_center">
                            <label for="Cidade">Recorrência(0 não ou 1 sim): </label>
                            <input type="text" id="id_Recorr" name="RecorrD">
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
        <script src="assets/js/funcions.js"></script>
    </body>

</html>
