<?php

    require_once 'src/conta.php';
    require_once 'src/titular.php';
    require_once 'src/CPF.php';


    $primeiraConta = new Conta(new titular(new CPF('175.461.001.88'),'victor'));
    $segundaConta = new Conta(new titular(new CPF('288.461.001.88'),'victor Edu'));

    $primeiraConta->depositar(500);
    $primeiraConta->sacar(300);
    var_dump($primeiraConta);
    echo $primeiraConta->recuperaTitularNome(). PHP_EOL;
    echo $primeiraConta->recuperaCpfTitular(). PHP_EOL;
    echo $primeiraConta->recuperarSaldo(). PHP_EOL;
 
  
    echo $segundaConta->recuperaTitularNome().PHP_EOL;
    echo $segundaConta->recuperaCpfTitular().PHP_EOL;
    echo $segundaConta->recuperarSaldo().PHP_EOL;

    echo conta::recuperanumeroDeContas();










?>