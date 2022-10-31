<?php

require __DIR__ . '/../vendor/autoload.php';

use App\ContaBancaria;
use App\ContasTipo\ContaCorrente;
use App\ContasTipo\ContaPoupanca;
use App\Contratos\DadosContaBancariaInterface;
use App\Contratos\OperacoesContaBancariaInterface;

//$contaBancaria = new ContaBancaria('Brasil', 'Thamyres', '8888', '1234-5','0');
//$contaBancaria -> setBanco("Banco do Brasil");
//var_dump($contaBancaria -> getBanco());
//var_dump($contaBancaria -> exibirDadosConta());


function executarDados(DadosContaBancariaInterface $conta){
    var_dump ($conta->exibirDadosConta());
}

function executarOperacoes(OperacoesContaBancariaInterface $conta){
    
    echo $conta->obterSaldo();
    echo PHP_EOL;
    echo $conta->depositar(50);
    echo PHP_EOL;
    echo $conta->obterSaldo();
    echo PHP_EOL;
    echo $conta->sacar(30);
    echo PHP_EOL;
    echo $conta->obterSaldo();
    echo PHP_EOL;
}
$contaCorrente = new ContaCorrente('Corrente', 'Thamyres', '8888', '1234-5','0');
$contaPoupanca = new ContaPoupanca('Poupança', 'Thamyres', '8888', '1234-5','0');

executarDados($contaCorrente);
executarOperacoes($contaCorrente);
executarDados($contaPoupanca);
executarOperacoes($contaPoupanca);