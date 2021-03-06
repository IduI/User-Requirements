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
                <h1>CADASTRAR CLIENTE</h1>
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
                    <form id="cad_produto_form" action="xr_cadastrarcliente.php" method="POST" name="ClienteC" onsubmit="validatorCliente()">
                        <div class="justify_center">
                            <label for="Nome">Nome:  </label>
                            <input type="text" id="id_nome" name="NomeC">
                        </div>
                        <div class="justify_center">
                            <label for="Email">Email: </label>
                            <input type="text" id="id_email" name="EmailC">
                        </div>
                        <div class="justify_center">
                            <label for="Telefone">Telefone: </label>
                            <input type="text" id="id_telefone" name="TelefoneC">
                        </div>
                        <div class="justify_center">
                            <label for="Cidade">Cidade: </label>
                            <input type="text" id="id_descr_serv" name="CidadeC">
                        </div>
                        <div class="justify_center">
                            <label for="Nairro">Bairro: </label>
                            <input type="text" id="id_bairro" name="BairroC">
                        </div>
                        <div class="justify_center">
                            <label for="Nua">Rua: </label>
                            <input type="text" id="id_rua" name="RuaC">
                        </div>
                        <div class="justify_center">
                            <label for="Numero">Numero: </label>
                            <input type="text" id="id_numero" name="NumeroC">
                        </div>
                        <div class="justify_center">
                            <input type="submit" value="Ok">
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
