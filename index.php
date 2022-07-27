<?php

// Fonction permettant le chargement automatique des classes
spl_autoload_register(function ($className) {
    require_once './classes/' . $className . '.php';
});

Log::afficherMessage("Coucou");

$berline = new Berline();
echo $berline->savoirSiJaiUnClignotant();
var_dump($berline);
echo "<br />";

$voiture1 = new Voiture();
$voiture1->setMarque("BMW");
$voiture1->setVitesse(50);
$voiture1->setMasse(1200);
echo $voiture1->calculerEnergieCinetique() . " Joules<br />";
$voiture1->setVitesse(60);
echo $voiture1->calculerEnergieCinetique() . " Joules<br />";
