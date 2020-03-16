<a href=" ./index.php" title="index"> index</a>
<br>

<?php
$arr= [ "Peugeot", "Renault", "BMW" , "Mercedes " ];

echo "Il y a ". count($arr)  . "marques de voitures dans le tableau :";
?>
<ul>
    <?php
     foreach ($arr as $key => $value) {
        echo "<li> $value </li>";
     }   
    ?>
</ul>