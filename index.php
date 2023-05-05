<?php

require_once __DIR__ . '/Models/Prodotto.php';
require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/Models/Gioco.php';
require_once __DIR__ . '/Models/Relax.php';
/*
$cuccia = new Prodotto(20, 'immagine', 'cuccia', 'giulius');
var_dump($cuccia);

$crocchetta = new Cibo(20, 'immagine', 'crocchetta', 'monoprotein', 'adult', 'secco', 'cinghiale');
var_dump($crocchetta);

$palla = new Gioco(20, 'immagine', 'palla saltellante', 'giulius', 'plastic', 'palla');
var_dump($palla);
*/

$animale_cuccia = new Animale('cane', 'icona');

$cuccia = new Relax($animale_cuccia, 20, 'immagine', 'cuccia bella', 'giulius', 'resina', 'cuccia', 'large');
var_dump($cuccia);
