<a href=" ./index.php" title="index"> index</a>
<br>
<?php
class Person
{
    // Properties
    private $nom ;
    private $prenom;
    private $dateDeNaissence;
   
   
    function __construct($c_nom,$c_prenom,$c_date_de_naissence)
    {
        $this-> nom = $c_nom;
        $this-> prenom = $c_prenom;
        $this-> dateDeNaissence = $c_date_de_naissence;

    }
     // Methods
     function getNom()
    {
        return $this->nom;
    }
    function setNom($p_nom)
    {
        $this->nom = $p_nom;
    }
     function getPrenom()
    {
        return $this->prenom;
    }
    function setPrenom($p_prenom)
    {
        $this->prenom = $p_prenom;
    }
     function getDateDeNaissence()
    {
        return $this->dateDeNaissence;
    }
    function setDateDeNaissence($p_date_de_naissence)
    {
        $this->dateDeNaissence= $p_date_de_naissence;
    }
    public function id()
    {
        $date= new DateTime();
        $date1= new DateTime ($this->getDateDeNaissence());
        $diff=date_diff($date1,$date);
        echo  $this->getNom(). "  "  .$this->getPrenom() . " " . $diff->format("à %y ans") . "<br>"; 
    }
}
echo '<br>';

$a = new person("DUPONT", "Michel", "1980-02-19");
$b = new person("DUCHEMIN", "Alice","1985-01-17");

$a->id();
$b->id();
    ?>