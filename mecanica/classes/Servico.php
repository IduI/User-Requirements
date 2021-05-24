<?php
class Servico
{

    // atributos

    private $codServico;
    private $codCli;
    private $dtRcb;
    private $dtEntrg;
    private $descr;
    private $orcamento;
    private $maodeobra;

    function setCodServico($codServico) { $this->codServico = $codServico; }
    function getCodServico() { return $this->codServico; }
    function setCodCli($codCli) { $this->codCli = $codCli; }
    function getCodCli() { return $this->codCli; }
    function setDtRcb($dtRcb) { $this->dtRcb = $dtRcb; }
    function getDtRcb() { return $this->dtRcb; }
    function setDtEntrg($dtEntrg) { $this->dtEntrg = $dtEntrg; }
    function getDtEntrg() { return $this->dtEntrg; }
    function setDescr($descr) { $this->descr = $descr; }
    function getDescr() { return $this->descr; }
    function setOrcamento($orcamento) { $this->orcamento = $orcamento; }
    function getOrcamento() { return $this->orcamento; }
    function setMaodeobra($maodeobra) { $this->maodeobra = $maodeobra; }
    function getMaodeobra() { return $this->maodeobra; }

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
