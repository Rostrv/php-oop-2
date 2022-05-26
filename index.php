<?php 

require_once __DIR__ . "./Models/prodotti.php";
require_once __DIR__ . "./Models/cibo.php";
require_once __DIR__ . "./Models/cuccia.php";
require_once __DIR__ . "./Models/giochi.php";
require_once __DIR__ . "./Models/utente.php";


 $cibo1 = new cibo('https://picsum.photos/200/300', 'Monge cubetti', 'cubetti di carne','1',['cani'],'2.99',['pollo']);


var_dump($cibo1);
