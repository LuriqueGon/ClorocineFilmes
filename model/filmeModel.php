<?php

    class FilmeModel{
        private $titulo;
        private $poster;
        private $sinopse;
        private $nota;

        public function __construct($titulo = "", $poster = "", $sinopse = "", $nota = ""){
            $this->titulo = $titulo;
            $this->poster = $poster;
            $this->sinopse = $sinopse;
            $this->nota = $nota;
        }

        public function __get($attr){
            return $this->$attr;
        }

        public function __set($attr, $value){
            $this->$attr = $value;
        }
    }