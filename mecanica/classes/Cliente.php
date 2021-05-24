<?php
class Cliente
{

    // atributos
    private $codCli;
    private $nome;
    private $email;
    private $telefone;
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;


    
    public function getCodCli()
    {
        return $this->codCli;
    }

    public function setCodCli($codCli)
    {
        $this->codCli = $codCli;

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

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }
   
    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    public function getRua()
    {
        return $this->rua;
    }

    public function setRua($Rua)
    {
        $this->rua = $Rua;

        return $this;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
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
