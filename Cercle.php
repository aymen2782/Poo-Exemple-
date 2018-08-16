<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 16/08/2018
 * Time: 11:57
 */
require_once 'Geometrie.php';
class Cercle extends Geometrie
{
    private $rayon;

    public function perimetre() {
        return 4*$this->cote;
    }



}