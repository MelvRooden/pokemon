<?php

require 'Pokemon.php';
require 'Attack.php';

$g = new Pokemon("Golurk", 3,89);
$g->Attacks[] = new Attack("Heavy Slam", 23);
$g->Attacks[] = new Attack("Rollout", 5);

prettyPrint($g);

$t = new Pokemon("Timburr", 1, 75);

prettyPrint($t);

foreach($g->Attacks as $attack) {
    prettyPrint("Execute attack " . $attack->Name . ' on ' . $t->Name);
    $attack->Execute($t);
}

prettyPrint($t);




function prettyPrint($var) {
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}