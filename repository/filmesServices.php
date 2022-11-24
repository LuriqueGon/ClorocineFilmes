<?php

    class FilmesServices{
        private $filme;
        private $conexao;

        public function __construct(FilmeModel $filme = null, Conexao $conexao){
            $this->filme = $filme;
            $this->conexao = $conexao->conectar();
        }

        public function insert():bool{

            $query = "INSERT INTO filmes VALUES (NULL, ?, ? , ? , ?)";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1,$this->filme->__get('titulo'), PDO::PARAM_STR);
            $stmt->bindValue(2,$this->filme->__get('poster'), PDO::PARAM_STR);
            $stmt->bindValue(3,$this->filme->__get('sinopse'), PDO::PARAM_STR);
            $stmt->bindValue(4,$this->filme->__get('nota'), PDO::PARAM_STR);
            return $stmt->execute();

        }

        public function read($fav = false):array{

            if($fav == false){
                $query = "SELECT id,titulo, poster, sinopse, nota, favoritos FROM filmes";
            }else{
                $query = "SELECT id,titulo, poster, sinopse, nota, favoritos FROM filmes WHERE favoritos = 1";
            }

            $stmt = $this->conexao->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        }

        public function favoritar(int $id, $action = true){
            if($action == true){
                $sql = "UPDATE filmes SET favoritos = 1 WHERE id = ?";
            }else{
                $sql = "UPDATE filmes SET favoritos = 0 WHERE id = ?";
            }
            $stmt = $this->conexao->prepare($sql);
                $stmt->bindValue(1, $id, PDO::PARAM_INT); 
                var_dump($sql);
                if($stmt->execute()) return 1; else return 0;
            
        }

    }

?>