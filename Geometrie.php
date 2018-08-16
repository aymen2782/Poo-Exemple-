<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 16/08/2018
 * Time: 10:11
 */

Abstract class Geometrie
{
    protected $nbreCote;
    protected $angle;

    public function air(){
      echo 'Je suis l air de la classe Geometrie<br>';
      return 1;
    }
    abstract function perimetre();
    private function politesse () {
        echo 'Bonjour chère Personne <br>';
    }

     function whoAmI() {
        $this->politesse();
        echo 'Je suis la forme ayant un nombre de cote = '.$this->nbreCote;
    }

    /**
     * @return mixed
     */
    public function getNbreCote()
    {
        return $this->nbreCote;
    }

    /**
     * @param mixed $nbreCote
     */
    public function setNbreCote($nbreCote): void
    {
        if($nbreCote<=12){
            $this->nbreCote = $nbreCote;
        }
    }

    /**
     * @return mixed
     */
    public function getAngle()
    {
        return $this->angle;
    }

    /**
     * @param mixed $angle
     */
    public function setAngle($angle): void
    {

        $this->angle = $angle;
    }



    public function __toString()
    {
        $this->politesse();
        // TODO: Implement __toString() method.
        return 'Je suis la forme ayant un nombre de cote = '.$this->nbreCote;
    }

}