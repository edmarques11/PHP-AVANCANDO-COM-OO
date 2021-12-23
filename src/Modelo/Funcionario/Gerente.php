<?php

namespace Alura\Banco\Modelo\Funcionario;

class Gerente extends Funcionario
{
  public function calculaBonificao(): float
  {
    return $this->recuperaSalario();
  }
}