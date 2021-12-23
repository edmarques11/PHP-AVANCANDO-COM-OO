<?php

namespace Alura\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
  public function calculaBonificao(): float
  {
    return $this->recuperaSalario() * 0.05;
  }

  public function sobeDeNivel(): void
  {
    $this->recebeAumento($this->recuperaSalario() * 0.75);
  }
}
