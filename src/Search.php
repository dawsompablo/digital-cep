<?php

namespace dawsompablo\DigitalCep;

/**
 * Main Class
 */
class Search
{
    private $urlBase = "https://viacep.com.br/ws/";

    /**
     * Put a zip code and revice from ViaCep one address
     * @var string $zipCode
     * @return array
     */
    public function getAddressFromZipcode(string $zipCode): array
    {
        $zipCode = preg_replace("/[^0-9]/", "", $zipCode);

        $get = file_get_contents($this->urlBase . $zipCode . "/json");

        return (array) json_decode($get);
    }
}
