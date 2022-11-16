<?php

    class CPF{

        private $numero;

        public function __construct($numero)
        {
            $this->numero=$numero;
        }
        public function recuperaNumero(): string
        {
            return $this->numero;
        }

    }















?>