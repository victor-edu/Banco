<?php


    class conta{

       private $titular;
       private $saldo;
       private static $numeroDeContas=0;

        public function __construct(titular $titular)
        {
            $this->titular=$titular;
            $this->saldo=0;
            self ::$numeroDeContas++;
        }
        public function transferir($transferencia, $conta)
        {
            if ($transferencia>$this->saldo){
                echo 'Saldo insuficiente';
                return;
            } 
            $this->sacar($transferencia);
            $conta->depositar($transferencia); 
        }
        public function depositar(float $deposito)
        {

            $this->saldo+=$deposito;
        }
        public function sacar(float $sacar)
        {

            if ($sacar>$this->saldo) {
                echo 'Saldo insuficiente';
                return;
            }
            $this->saldo-=$sacar;
        }   
        public function recuperarSaldo(): float
        {
            return $this->saldo;
        }
        public static function recuperanumeroDeContas()
        {

            return self ::$numeroDeContas;
        }
        public function recuperaTitularNome()
        {
            return $this->titular->recuperaNome();
        }
        public function RecuperaCpfTitular()
        {
            return $this->titular->recuperaCpf();
        }

        public function __destruct()
        {
        self::$numeroDeContas--;
        }

    
    
    }
       
 
  
  

















?>