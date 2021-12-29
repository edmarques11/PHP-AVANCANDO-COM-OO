<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Gerente, EditorVideo};

$umEditor = new EditorVideo(
  'Paulo',
  new CPF('432.657.324-88'),
  1500
);

$umDesenvolvedor = new Desenvolvedor(
  'Fulano',
  new CPF('123.456.789-10'),
  10000
);

$umDesenvolvedor->sobeDeNivel();

$umaGerente = new Gerente(
  'Fulana',
  new CPF('987.654.321-10'),
  3000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umDesenvolvedor);
$controlador->adicionaBonificacaoDe($umaGerente);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();
