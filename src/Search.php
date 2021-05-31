<?php

namespace dawsompablo\DigitalCep;

class Search
{
    private $urlBase = "https://viacep.com.br/ws/";

    public function getAddressFromZipcode(string $zipcode): array
    {
        $zipcode = preg_replace("/[^0-9]/", "", $zipcode);

        $get = file_get_contents($this->urlBase . $zipcode . "/json");

        return (array) json_decode($get);
    }
}
