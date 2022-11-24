<?php

    class Conexao{
        private $host = 'localhost';
        private $dbName = 'filmes';
        private $user = 'root';
        private $pass = '';

        public function conectar(){
            try{
                $conexao = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->user, $this->pass);
                // echo 'Conectado';
                return $conexao;    
                
            }catch(PDOException $e){
                echo "Erro definido como {$e->getMessage()}";
            }
        }
    }


?>