<?php

namespace Alura\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
  public function calculaBonificao(): float
  {
    return 500.0;
  }

  public function sobeDeNivel(): void
  {
    $this->recebeAumento($this->recuperaSalario() * 0.75);
  }
}
