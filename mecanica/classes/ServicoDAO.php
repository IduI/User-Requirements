<?php
    require_once "Conexao.php";
    require_once "Servico.php";
    class ServicoDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }
        
        
        public function listar(){
            try{
                $query = $this->conexao->prepare("select * from ordemservico order by codServico");
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Servico");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function excluir($codigo){
            try{
                $query = $this->conexao->prepare("delete from ordemservico where codServico = :c");
                $query->bindValue(":c", $codigo);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }
        public function buscarPorCodigo($codigo){
            try{
                $query = $this->conexao->prepare("select * from servico where codServico = :c");
                $query->bindValue(":c", $codigo);
                $query->execute();
                $registro = $query->fetchAll(PDO::FETCH_CLASS, "Servico");
                return $registro;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }
        public function inserir($codCli,$dtRcb,$dtEntrg,$descr,$orcamento,$maodeobra){
            try{
                $query = $this->conexao->prepare("insert into ordemservico values (NULL, :cc, :dr, :de, :d, :o, :m)");
                $query->bindValue(":cc", $codCli);
                $query->bindValue(":dr", $dtRcb);
                $query->bindValue(":de", $dtEntrg);
                $query->bindValue(":d", $descr);
                $query->bindValue(":o", $orcamento);
                $query->bindValue(":m", $maodeobra);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }
        public function atualizar($codigo,$nome,$email,$telefone,$cidade,$bairro,$rua,$numero){
            try{
                $query = $this->conexao->prepare("UPDATE ordemservico SET nome = :n, 
                email = :e, telefone = :t, cidade = :c, bairro = :b,
                rua = :r, numero = :nu where codCli = :cd;");
                $query->bindValue(":n", $nome);
                $query->bindValue(":e", $email);
                $query->bindValue(":t", $telefone);
                $query->bindValue(":c", $cidade);
                $query->bindValue(":b", $bairro);
                $query->bindValue(":r", $rua);
                $query->bindValue(":nu", $numero);
                $query->bindValue(":cd", $codigo);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }
        
    
    }

?>   