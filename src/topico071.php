<?php

echo "<h1>while</h1>";
$i=0;
while($i<=10){
    echo " $i";
    $i++;$i++;
} 

echo "<h1>For</h1>";
for($i=0;$i<5;$i++) echo " $i";

echo "<h1>Looping aninhado</h1>";
for($i=0;$i<3;$i++){
    for($j=0;$j<2;$j++) {
        echo "$i $j<br>";
    }
}

/*
valor inicial: 4
condicao: 
contador
quantas vezes o looping foi executado
qual o valor que tornou a condicao como falsa
saída 11 12 13 14
*/

?>