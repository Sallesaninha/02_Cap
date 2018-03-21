<?php

    class Produto {
        private $nome;
        private $valor;
        private $caracteristicas;
        
        public function addCaracteristica( $nome, $valor ) {
            this->caracteristicas[] = new Caracteristica($nome, $valor);
        }
        
        public function getCaracteristicas() {
            return $this->caracteristicas;
        }
    }

?>