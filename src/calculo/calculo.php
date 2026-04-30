<?php

declare(strict_types=1);

namespace src\calculo;

use Exception;
class Calculo {

    private float $valor;
    private int $gorjeta;
    private int $qtdPessoas;

    public function __construct() {}


    public function setValor(float $newValor): void {
        $this->valor = $newValor;
    }

    public function getValor(): float {
        return $this->valor;
    }

    public function setGorjeta(int $newGorjeta): void {
        $this->gorjeta = $newGorjeta;
    }

    public function getGorjeta(): int {
        return $this->gorjeta;
    }

    public function setQtdPessoas(int $newQtdPessoas): void {
        $this->qtdPessoas = $newQtdPessoas;
    }

    public function getQtdPessoas(): int {
        return $this->qtdPessoas;
    }

    public function gorjeta(): float {
        return $this->valor * ($this->gorjeta / 100);
    }

    public function valorTotal(): float {
        return $this->valor + ($this->valor * ($this->gorjeta / 100));
    }

    public function divisPessoas(): float {
        if ($this->qtdPessoas <= 0) {
            throw new Exception('Quantidade de pessoas incorreta') ;
        }
        return $this->valorTotal() / $this->qtdPessoas;
    }
    
    
}