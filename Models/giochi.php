<?php

class Giochi extends Prodotti{
    function __construct(String $immagine, String $nome, String $descrizione, Int $quantita, Array $categoria, Int $prezzo)
    {
        parent::__construct($immagine, $nome, $descrizione, $quantita, $categoria, $prezzo);
    
    }
}