<?php

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador;
$umDiretor = new Titular(
    new CPF('010.222.333-09'),
    'Senhorinho',
    new Endereco('Bocaina', 'Zona Rural', 'Morrinhos', '23')
);

$autenticador->tentaLogin($umDiretor, 'abcd');
