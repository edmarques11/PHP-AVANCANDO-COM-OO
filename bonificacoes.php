<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{CPF, Funcionario};

$umFuncionario = new Funcionario(
  'Fulano',
  new CPF('123.456.789-10'),
  'Dev',
  10000
);

$umaFuncionaria = new Funcionario(
  'Fulana',
  new CPF('987.654.321-10'),
  'Gerente',
  3000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);

echo $controlador->recuperaTotal();
