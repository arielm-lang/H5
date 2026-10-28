<?php

require_once 'cachorro.php';
require_once 'gato.php';

$cachorro = new Cachorro('Catarina', 4, 'shitzu');
$cachorro->mostrarDados();
$cachorro->latir();

echo '<br>';

$gato = new Gato('Tulipa', 2, 'Preta');
$gato->mostrarDados();
$gato->miar();