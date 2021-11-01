<?php 

require_once "../vendor/autoload.php";

use Renan\Consulcep\Busca;
use Renan\Consulcep\Busca2;
use Renan\Consulcep\Busca3;

$procura = new Busca;
$procura2 = new Busca2;
$procura3 = new Busca3;

$resultado = $procura->getEnderecoCep('59063160');
$resultado2 = $procura2->getEndCep('59063160');
$resultado3 = $procura3->getEnderecoCep3('59131080');

print_r($resultado);
echo "<br>";
print_r($resultado2);
echo "<br>";
print_r($resultado3);
