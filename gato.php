<?php

require_once 'Animais.php';

class Gato extends Animal {
    private string $cor;

    public function __construct( $nome, $idade, string $cor) {
        parent::__construct($nome, $idade);
        $this->cor = $cor;
    }

    public function miar() {
        echo $this->nome . ' diz: Miau!<br>';
    }

    public function mostrarDados() {
        echo 'Nome: ' . $this->nome . ' | Idade: ' . $this->getIdade() . ' anos | Cor: ' . $this->cor . '<br>';
    }
}