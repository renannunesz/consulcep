<?php 

require_once "../vendor/autoload.php";

use Renan\Consulcep\Busca;

$procura = new Busca;

$resultado = $procura->getEnderecoCep('59063160');

print_r($resultado);