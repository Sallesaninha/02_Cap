<?php

    class Produto {
        private $descricao;
        private $estoque;
        private $preco;
        private $fabricante;
        private $caracteristicas;
        
        public function __construct($descricao, $estoque, $preco) {
            $this->descricao = $descricao;
            $this->estoque = $estoque;
            $this->preco = $preco;
        }
        
        public function addCaracteristica( $nome, $valor ) {
            $this->caracteristica[] = new Caracteristica($nome, $valor);
        }
        
        public function getDescricao() {
            return $this->descricao;
        }
        
        public function setFabricante( Fabricante $f ) {
            $this->fabricante = $f;
        }
        
        public function getfabricante() {
            return $this->fabricante;
        }
        
        public function getCaracteristica() {
            return $this->caracteristica;
        }
    }

?>