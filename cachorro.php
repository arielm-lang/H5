<?php

require_once 'Animais.php';

class Cachorro extends Animal {
    private string $raca;

    public function __construct( $nome, $idade, string $raca) {
        parent::__construct($nome, $idade);
        $this->raca = $raca;
    }

    public function latir() {
        echo $this->nome . ' diz: Au Au!<br>';
    }

    public function mostrarDados() {
        echo 'Nome: ' . $this->nome . ' | Idade: ' . $this->getIdade() . ' anos | Raça: ' . $this->raca . '<br>';
    }
}