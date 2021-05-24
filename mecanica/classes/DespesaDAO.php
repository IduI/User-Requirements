<?php
    require_once "Conexao.php";
    require_once "Despesa.php";
    class DespesaDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }
        
        public function listar(){
            try{
                $query = $this->conexao->prepare("select * from despesa order by codDespesa");
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Despesa");
                
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }
        public function buscarPorCodigo($codigo){
            try{
                $query = $this->conexao->prepare("select * from despesa where codDespesa = :d");
                $query->bindValue(":d", $codigo);
                $query->execute();
                $registro = $query->fetchAll(PDO::FETCH_CLASS, "Despesa");
                return $registro;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }
        public function inserir($descricao,$valor,$prazo,$recorr){
            try{
                $query = $this->conexao->prepare("insert into despesa values (NULL, :d, :v, :p, :r)");
                $query->bindValue(":d", $descricao);
                $query->bindValue(":v", $valor);
                $query->bindValue(":p", $prazo);
                $query->bindValue(":r", $recorr);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }
        public function excluir($codigo){
            try{
                $query = $this->conexao->prepare("delete from despesa where codDespesa = :d");
                $query->bindValue(":d", $codigo);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }
        public function atualizar($codigo,$descricao,$valor,$prazo,$recorr){
            try{
                $query = $this->conexao->prepare("UPDATE despesa SET descr = :d,  
                valor = :v, prazoValidade = :p, recorr = :r where codDespesa = :cd;");
                $query->bindValue(":d", $descricao);
                $query->bindValue(":v", $valor);
                $query->bindValue(":p", $prazo);
                $query->bindValue(":r", $recorr);
                $query->bindValue(":cd", $codigo);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }
    }

?>   