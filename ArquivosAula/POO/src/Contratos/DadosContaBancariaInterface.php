<?php

declare(strict_types=1);

namespace App\Contratos;

interface DadosContaBancariaInterface {
    public function exibirDadosConta(): array;
    public function getBanco(): string;
}