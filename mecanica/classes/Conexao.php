<?php
    class Conexao{
        // atributo
        public static $conexao;

        // método
        public static function conecta(){
            if(!isset(self::$conexao)){
                try{
                    self::$conexao = new PDO("mysql:host=localhost; dbname=mecanica", "admmecanica", "123456");
                }
                // CREATE USER 'admmecanica'@'localhost' IDENTIFIED BY '123456';
                // GRANT SELECT, INSERT, UPDATE, DELETE ON mecanica.* TO 'admmecanica'@'localhost';
                catch(PDOException $e){
                    echo "Erro de conexão: ". $e->getMessage();
                    die();
                }
            }
            return self::$conexao;
        }
    }

?>   