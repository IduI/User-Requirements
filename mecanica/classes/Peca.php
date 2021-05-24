<?php
class Peca
{

    // atributos
    private $codPeca;
    private $qtd;
    private $nome;
    private $valorUnitario;
    private $limiteMinBaixa;
    public function getCodPeca()
    {
        return $this->codPeca;
    }

    public function setCodPeca($codPeca)
    {
        $this->codPeca = $codPeca;

        return $this;
    }

    public function getQtd()
    {
        return $this->qtd;
    }

    public function setQtd($qtd)
    {
        $this->qtd = $qtd;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    public function setValorUnitario($valorUnitario)
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }
   
    public function setiLmiteMinBaixa($limiteMinBaixa)
    {
        $this->limiteMinBaixa = $limiteMinBaixa;

        return $this;
    }
    public function getLimiteMinBaixa()
    {
        return $this->limiteMinBaixa;
    }
    // public function validate(){
    //     $erros = array();
    //     if(empty($this->getNome()))
    //         $erros[] = "É necessário informar um nome";
    //     if(empty($this->getEmail()))
    //         $erros[] = "É necessário informar um endereço de e-mail";
    //     elseif(!filter_var($this->getEmail(), FILTER_VALIDATE_EMAIL))
    //         $erros[] = "Verifique o formato do endereço de e-mail";            
    //     if(empty($this->getTelefone()))
    //         $erros[] = "É necessário informar um número de telefone";   
    //     if(strlen($this->getSenha()) < 6)
    //         $erros[] = "A senha deve ter no mínimo 6 caracteres";          
    //     if($this->getSenha() !=  $this->getSenha2())
    //         $erros[] = "As senhas não conferem";                   
    //     return $erros;                                 
    // }     
}
