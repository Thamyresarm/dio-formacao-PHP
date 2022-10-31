<?php

namespace App;

use App\Contratos\DadosContaBancariaInterface;
use App\Contratos\OperacoesContaBancariaInterface;

abstract class ContaBancaria implements DadosContaBancariaInterface, OperacoesContaBancariaInterface{

    protected string $banco;
    protected string $titular;
    protected string $agencia;
    protected string $conta;
    protected float $saldo;

    public function __construct(
        string $banco,
        string $titular,
        string $agencia,
        string $conta,
        float $saldo    
    )
    {
        $this-> banco = $banco;
        $this-> titular = $titular;
        $this-> agencia = $agencia;
        $this-> conta = $conta;
        $this-> saldo = $saldo;
    }
    
    
    public abstract function obterSaldo(): string;
    
    public function exibirDadosConta(): array{
      return [
           'banco' => $this->banco,
           'titular' => $this->titular,
           'agencia' => $this->agencia,
           'conta' => $this->conta,
           'saldo' => $this->saldo,
       ];
   }

    public function getBanco(): string{
        return $this->banco;
    }

    public function sacar(float $valor): string{
        $this->saldo -= $valor;
        return 'Saque de R$ ' . number_format($valor,2,',','') . ' realizado';
    }
    
    public function depositar($valor): string{
        $this->saldo += $valor;
        return "Depósito de R$ $valor realizado";
    }

    //   public function setBanco(string $banco): void
      // {
        //   $this->banco = $banco;
       //}
}