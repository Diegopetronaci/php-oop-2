<?php

class UserProfile extends User {
    public $nome;
    public $cognome;
    public $data_di_nascita;
    public $cell;
    public $biografia;

    public function __construct(string $nome, string $cognome, string $data_di_nascita, int $cell, string $biografia, string $username, string $email, string $password) {
        
        parent::__construct($username, $email, $password);
        
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->data_di_nascita = $data_di_nascita;
        $this->cell = $cell;
        $this->biografia = $biografia;
    }
}



