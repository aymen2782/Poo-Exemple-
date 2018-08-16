<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 16/08/2018
 * Time: 11:02
 */

require_once 'Geometrie.php';
class Rectangle extends Geometrie
{
    private $largeur;
    private $longuer;

    /**
     * Rectangle constructor.
     * @param $largeur
     * @param $longuer
     */
    public function __construct($largeur=0, $longuer=0)
    {
        $this->largeur = $largeur;
        $this->longuer = $longuer;
    }


    public function air() {
        echo 'Je suis l air de la classe Rectangle <br>';
        return $this->largeur*$this->longuer;
    }

    public function perimetre() {
        return 2*($this->largeur+$this->longuer);
    }


}