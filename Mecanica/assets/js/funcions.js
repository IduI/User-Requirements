document.querySelector('form').addEventListener("submit", event =>{event.preventDefault()}) 



function validatorCliente(){
    var name = document.forms["ClienteC"]["NomeC"].value;
    var phone = document.forms["ClienteC"]["TelefoneC"].value;
    var ads = document.forms["ClienteC"]["EndereçoC"].value
    var city = document.forms["ClienteC"]["CidadeC"].value
    
    if(name == "" || name == undefined){
        alert("Campo 'Nome' precisa ser preenchido");
        return false;
    }
    if(phone == "" || phone == undefined){
        alert("Campo 'Telefone' precisa ser preenchido");
        return false;
    }
    if(ads == "" || ads == undefined){
        alert("Campo 'Endereco' precisa ser preenchido");
        return false;
    }
    if(city == "" || city == undefined){
        alert("Campo 'Cidade' precisa ser preenchido");
        return false;
    }
    

}

function validatorDespesa(){
    var name = document.forms["Despesa"]["DespDes"].value;
    var valor = document.forms["Despesa"]["ValorD"].value;
    var prazo = document.forms["Despesa"]["PrazoDesp"].value;

    if(name == "" || name == undefined){
        alert("Campo 'Descricao da despesa  ' precisa ser preenchido");
        return false;
    }
    if(valor == "" || valor == undefined){
        alert("Campo 'Valor' precisa ser preenchido");
        return false;
    }
    if(prazo == "" || valor == undefined){
        alert("Campo 'Prazo' precisa ser preenchido");
        return false;
    }
}

function validatorProd(){
   var codigo= document.forms["CadProduto"]["Code"].value;
   var  VU= document.forms["CadProduto"]["VU"].value;
   var name= document.forms["CadProduto"]["PNome"].value;
   var lim= document.forms["CadProduto"]["ML"].value;  
   
   if(codigo == "" || codigo == undefined){
        alert("Campo 'Código' precisa ser preenchido");
        return false;
    }
    if(name == "" || name == undefined){
        alert("Campo 'Nome' precisa ser preenchido");
        return false;
    }
    if(VU == "" || VU == undefined){
        alert("Campo 'Valor Unitario' precisa ser preenchido");
        return false;
    }
    if(lim == "" || lim == undefined){
        alert("Campo 'Limite minimo' precisa ser preenchido");
        return false;
    }
}