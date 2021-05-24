<?php
    require_once "Conexao.php";
    require_once "Cliente.php";
    class ClienteDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }
        
        
        public function listar(){
            try{
                $query = $this->conexao->prepare("select * from cliente order by codCli");
                
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Cliente");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function excluir($codigo){
            try{
                $query = $this->conexao->prepare("delete from cliente where codCli = :c");
                $query->bindValue(":c", $codigo);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }
        public function buscarPorCodigo($codigo){
            try{
                $query = $this->conexao->prepare("select * from cliente where codCli = :c");
                $query->bindValue(":c", $codigo);
                $query->execute();
                $registro = $query->fetchAll(PDO::FETCH_CLASS, "Cliente");
                return $registro;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }
        public function inserir($nome,$email,$telefone,$cidade,$bairro,$rua,$numero){
            try{
                $query = $this->conexao->prepare("insert into cliente values (NULL, :n, :e, :t, :c, :b, :r, :nu)");
                $query->bindValue(":n", $nome);
                $query->bindValue(":e", $email);
                $query->bindValue(":t", $telefone);
                $query->bindValue(":c", $cidade);
                $query->bindValue(":b", $bairro);
                $query->bindValue(":r", $rua);
                $query->bindValue(":nu", $numero);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }
        public function atualizar($codigo,$nome,$email,$telefone,$cidade,$bairro,$rua,$numero){
            try{
                $query = $this->conexao->prepare("UPDATE cliente SET nome = :n, 
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