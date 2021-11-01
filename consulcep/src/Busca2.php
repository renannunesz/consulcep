<?php 

namespace Renan\Consulcep;

class Busca2 
{
    public $link = "http://cep.la/";

    public function getEndCep (string $cep2): string {

        $getBusca = file_get_contents($this->link . $cep2);

        return $getBusca;

    }

}