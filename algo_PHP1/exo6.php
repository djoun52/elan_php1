<a href=" ./index.php" title="index"> index</a>
<br>

<?php


$txt1 = "Notre formation DL commence aujourd'hui";
$txt2 = "bonjour à tous";


function text_taille($param){
    $x=str_word_count($param);
    echo "La phrase «" . $param . "» contient " . $x . " mots. <br>" ;
    return;
}

text_taille($txt1);
text_taille($txt2);

?>