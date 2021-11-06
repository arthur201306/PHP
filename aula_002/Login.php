<?php

    class Login{
        private $email;
        private $senha;

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($e) {
            return $this->email = $e;
        }

        public function getSenha() {
            return $this->senha;
        }

        public function setSenha($s) {
            return $this->senha = $s;
        }

        public function Logar() {
            if ($this->email == "teste@gmail.com" and $this->senha == "1234"){
                echo "Logado !";
            } else {
                echo "Dados inválidos !";
            }
        }
    }


?>