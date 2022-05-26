<?php

class Cibo extends Prodotti{
    function __construct(String $immagine, String $nome, String $descrizione, Int $quantita, Array $categoria, Int $prezzo, Int $dimensioni)
    {
        parent::__construct($immagine, $nome, $descrizione, $quantita, $categoria, $prezzo);
        $this->dimensioni = $dimensioni;
    }
}