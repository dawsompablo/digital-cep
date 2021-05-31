<?php

require 'vendor/autoload.php';

use dawsompablo\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode("58840000");

print_r($resultado);
