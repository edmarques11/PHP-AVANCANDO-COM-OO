<?php

namespace Alura\Banco\Modelo\Funcionario;

class EditorVideo extends Funcionario
{
  public function calculaBonificao(): float
  {
    return 600.0;
  }
}