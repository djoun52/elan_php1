<a href=" ./index.php" title="index"> index</a>
<br>

<?php
 $date1=date_create("1996-03-16");
 $date2=date_create("1985-01-07");

function age($param){
  
   $date= new DateTime("now");
   $diff=date_diff($param,$date);
   echo " age de la personne : " .$diff->format("'%y Year %m Month %d Day") . "<br>";
   return;
}

age($date1);

age($date2);
?>