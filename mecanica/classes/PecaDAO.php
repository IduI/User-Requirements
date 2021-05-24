<?php
    require_once "Conexao.php";
    require_once "Peca.php";
    class PecaDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }
        
        public function listar(){
            try{
                $query = $this->conexao->prepare("select * from peca order by codPeca");
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Peca");
                
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }
        public function buscarPorCodigo($codigo){
            try{
                $query = $this->conexao->prepare("select * from peca where codPeca = :p");
                $query->bindValue(":p", $codigo);
                $query->execute();
                $registro = $query->fetchAll(PDO::FETCH_CLASS, "Peca");
                return $registro;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }
        public function atualizar($codigo,$qtd,$nome,$valorunit,$limite){
            try{
                $query = $this->conexao->prepare("UPDATE peca SET  
                qtd = :q, nome = :n, valorUnitario = :v, limiteMinBaixa = :l where codPeca = :cd;");
                $query->bindValue(":q", $qtd);
                $query->bindValue(":n", $nome);
                $query->bindValue(":v", $valorunit);
                $query->bindValue(":l", $limite);
                $query->bindValue(":cd", $codigo);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }   
        public function inserir($codPeca,$qtd,$nome,$valor,$limite){
            try{
                $query = $this->conexao->prepare("insert into peca values (:c, :q, :n, :v, :l)");
                $query->bindValue(":c", $codPeca);
                $query->bindValue(":q", $qtd);
                $query->bindValue(":n", $nome);
                $query->bindValue(":v", $valor);
                $query->bindValue(":l", $limite);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }
        public function excluir($codigo){
            try{
                $query = $this->conexao->prepare("delete from peca where codPeca = :c");
                $query->bindValue(":c", $codigo);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }
        public function atualizaQtd($codigo,$qtd){
            try{
                $query = $this->conexao->prepare("UPDATE peca SET  
                qtd = (select qtd from peca where codPeca = :cod)+:q  where codPeca = :cd;");
                $query->bindValue(":q", $qtd);
                $query->bindValue(":cd", $codigo);
                $query->bindValue(":cod", $codigo);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }   
        public function atualizaQtdSubtrai($codigo,$qtd){
            try{
                $query = $this->conexao->prepare("UPDATE peca SET  
                qtd = (select qtd from peca where codPeca = :cod)-:q  where codPeca = :cd;");
                $query->bindValue(":q", $qtd);
                $query->bindValue(":cd", $codigo);
                $query->bindValue(":cod", $codigo);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }   
        
    }

?>   