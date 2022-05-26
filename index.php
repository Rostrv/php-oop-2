<?php 

include __DIR__ . "./Models/prodotti.php";
include __DIR__ . "./Models/cibo.php";
include __DIR__ . "./Models/cuccia.php";
include __DIR__ . "./Models/giochi.php";
include __DIR__ . "./Models/utente.php";


 $cibo1 = new cibo('https://picsum.photos/200/300', 'Monge cubetti', 'cubetti di carne','1',['cani'],'2.99',['pollo']);


var_dump($cibo1);
