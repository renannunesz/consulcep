<?php 

namespace Renan\Consulcep;

class Busca3 
{

    public $link3 = "https://ws.apicep.com/cep/";

    public function getEnderecoCep3(string $cep3): array {

        $get = file_get_contents($this->link3 . $cep3 . ".json");

        return (array) json_decode($get);

    }

}