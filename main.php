<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 16/08/2018
 * Time: 10:21
 */

require 'Carre.php';
require 'Cercle.php';
require 'Rectangle.php';
require 'GestionGeomtrie.php';
$carre = new Carre(4);
$rectangle = new Rectangle(2,4);
$cercle = new Cercle();

$carre->whoAmI();

function calculerTotalAir(Geometrie ...$mesformes) : float {
    $totalAir = 0;

    foreach ($mesformes as $maForme) {
        $totalAir+=$maForme->air();
    }
    return $totalAir;
}

echo '<br>Total = ';
$mesformes = array(
    $carre,
    $rectangle,
    $cercle
);
echo calculerTotalAir(...$mesformes);