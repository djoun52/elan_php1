<?php
class person
{
    // Properties
    public $nom ;
    public $age ;
    public $prenom;
   
    function __construct($c_nom,$c_prenom,$c_age)
    {
        $this-> nom = $c_nom;
        $this-> prenom = $c_prenom;
        $this-> age = $c_age;

    }
     // Methods
     function get_nom()
    {
        return $this->nom;
    }
    function set_nom($p_nom)
    {
        $this->nom = $p_nom;
     function get_prenom()
    {
        return $this->prenom;
    }
    function set_prenom($p_prenom)
    {
        $this->prenom = $p_prenom;
     function get_age()
    {
        return $this->age;
    }
    function set_age($p_age)
    {
        $this-> age= $p_age;