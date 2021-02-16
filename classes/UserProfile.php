<?php

class UserProfile extends User {
    public $nome;
    public $cognome;
    public $data_di_nascita;
    public $cell;

    public function  __construct(string $nome, string $cognome, string $data_di_nascita, int $cell) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->data_di_nascita = $data_di_nascita;
        $this->cell = $cell;
    }
}



