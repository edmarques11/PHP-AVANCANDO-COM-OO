<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Gerente};

$umFuncionario = new Desenvolvedor(
  'Fulano',
  new CPF('123.456.789-10'),
  'Dev',
  10000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
  'Fulana',
  new CPF('987.654.321-10'),
  'Gerente',
  3000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);

echo $controlador->recuperaTotal();
