<?php
require_once 'jarro.php';
require_once 'jogador.php';

$jogador1 = new jogador("Felipe");

$jarro1 = new jarro("jarro1",5);
$jarro2 = new jarro("jarro2",3);


$jogador1->encher($jarro1);

$jogador1->status($jarro1,$jarro2);

$jogador1->trocar($jarro1, $jarro2);

$jogador1->status($jarro1,$jarro2);

$jogador1->esvaziar($jarro2);

$jogador1->status($jarro1,$jarro2);

$jogador1->trocar($jarro1, $jarro2);

$jogador1->status($jarro1,$jarro2);

?>
