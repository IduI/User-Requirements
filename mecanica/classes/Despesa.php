<?php
class Despesa
{

    // atributos
    private $codDespesa;
    private $descr;
    private $valor;
    private $prazoValidade;
    private $recorr;
    public function getCodDespesa()
    {
        return $this->codDespesa;
    }

    public function setCodCli($codDespesa)
    {
        $this->codDespesa = $codDespesa;

        return $this;
    }

    public function getDescr()
    {
        return $this->descr;
    }

    public function setDescr($descr)
    {
        $this->descr = $descr;

        return $this;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    public function getPrazoValidade()
    {
        return $this->prazoValidade;
    }

    public function setPrazoValidade($prazoValidade)
    {
        $this->prazoValidade = $prazoValidade;

        return $this;
    }
   
    public function setRecorr($recorr)
    {
        $this->recorr = $recorr;

        return $this;
    }
    public function getRecorr()
    {
        return $this->recorr;
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
