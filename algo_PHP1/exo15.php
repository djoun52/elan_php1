<a href=" ./index.php" title="index"> index</a>
<br>
<?php
class Person
{
    // Properties
    private $nom ;
    private $prenom;
    private $date_de_naissence;
   
   
    function __construct($c_nom,$c_prenom,$c_date_de_naissence)
    {
        $this-> nom = $c_nom;
        $this-> prenom = $c_prenom;
        $this-> date_de_naissence = $c_date_de_naissence;

    }
     // Methods
     function get_nom()
    {
        return $this->nom;
    }
    function set_nom($p_nom)
    {
        $this->nom = $p_nom;
    }
     function get_prenom()
    {
        return $this->prenom;
    }
    function set_prenom($p_prenom)
    {
        $this->prenom = $p_prenom;
    }
     function get_date_de_naissence()
    {
        return $this->date_de_naissence;
    }
    function set_date_de_naissence($p_date_de_naissence)
    {
        $this->date_de_naissence= $p_date_de_naissence;
    }
    public function id()
    {
        $date= new DateTime();
        $date1= new DateTime ($this->get_date_de_naissence());
        $diff=date_diff($date1,$date);
        echo  $this->get_nom(). "  "  .$this->get_prenom() . " " . $diff->format("à %y ans") . "<br>"; 
    }
}
echo '<br>';

$a = new person("DUPONT", "Michel", "1980-02-19");
$b = new person("DUCHEMIN", "Alice","1985-01-17");

$a->id();
$b->id();
    ?>