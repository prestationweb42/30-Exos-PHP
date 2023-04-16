<?php
class Maison
{
    private static $increment = 1;
    private $id;
    private $dateCreation;
    private $nbChambres;
    private $surface;

    // constructeur
    public function __construct($dateCreation, $nbChambres, $surface)
    {
        $this->id = self::$increment;
        self::$increment++;
        $this->dateCreation = $dateCreation;
        $this->nbChambres = $nbChambres;
        $this->surface = $surface;
    }

    // mis en place de 2 getter pour permettre l'affichage de certaines propriétés qui sont déclarées en private
    public function getId()
    {
        return $this->id;
    }
    public function getDateCreation()
    {
        return $this->dateCreation;
    }
    public function getNbChambres()
    {
        return $this->nbChambres;
    }
    public function getSurface()
    {
        return $this->surface;
    }
}