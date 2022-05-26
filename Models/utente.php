<?php

class Utente{
    public $nickname;
    public $nome;
    public $cognome;
    public $email;
    public $telefono;
    public $indirizzo;
    public $pagamento;
    public $registrato;
    function __construct(String $nickname, String $nome, String $cognome, String $email, Int $telefono, String $indirizzo, String $pagamento, Bool $registrato)
    {
        $this->nickname = $nickname;
        $this->name = $nome;
        $this->lastname = $cognome;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->indirizzo = $indirizzo;
        $this->pagamento = $pagamento;
        $this->registrato = $registrato;
    }

}