<?php
class Prodotti {
    public $immagine;
    public $nome;
    public $descrizione;
    public $quantita;
    public $categoria;
    public $prezzo;
    

    function __construct(String $immagine, String $nome, String $descrizione, Int $quantita, Array $categoria, Int $prezzo)
    {
        $this->immagine = $immagine;
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->quantita = $quantita;
        $this->categoria = $categoria;
        $this->prezzo = $prezzo;
        
    }
   
}