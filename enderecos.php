<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Bocaina', 'Zona Rural', 'Morrinhos', '22');
$outroEndereco = new Endereco('Minas Gerais', 'Itajubá', 'Quitéria', '77');

echo $umEndereco->rua . PHP_EOL;
echo $umEndereco->cidade . PHP_EOL;

$umEndereco->cidade = 'Nova cidade';
echo $umEndereco->cidade;

exit();

echo $umEndereco . PHP_EOL;
echo $outroEndereco;