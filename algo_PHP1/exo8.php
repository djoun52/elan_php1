<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href=" ./index.php" title="index"> index</a>
<br>
    <?php
function table_multipli ($para,$k){
    if (is_int($para) && is_int($k)){
        for ($i=0; $i <= $k; $i++) {
            echo $para .'x' . $i . '=' . $para * $i;
            echo '<br>';
        
    }
        
    
    }else {
          echo "une phrase";
         }
    }

table_multipli(2,5);
table_multipli(3,"salut");