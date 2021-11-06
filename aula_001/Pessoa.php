<?php

    class Pessoa {
        var $nome;
        var $idade;

        public function Falar() {
            echo $this->nome . " de " . $this->idade . " anos acabou de falar";
        }
    }
?>