<?php

    include_once __DIR__ . '/User.php';
    
    class UserProfile extends User {
        public $nome;
        public $cognome;
        public $data_di_nascita;
        public $cell;
        public $biografia;

        public function __construct(string $username, string $email, string $password, string $nome, string $cognome, string $data_di_nascita, string $cell, string $biografia) {
            
            parent::__construct($username, $email, $password);
            
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->data_di_nascita = $data_di_nascita;
            $this->cell = $cell;
            $this->biografia = $biografia;
        }
}



