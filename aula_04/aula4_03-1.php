<?php
$a = "Maria ";
echo "$a <br>";
$b = "Leopoldina ";
echo "$b <br>";
$a.=$b; // A variavel $a é igual a "Maria Leopoldina"
echo $a; // Vai imprimir a saída "Maria Leopoldina"
$b .= $a; //$b
echo "<br>$b"; // Vai imprimir a variavel "Leopoldina" mais o resultado da varial $a (encima) que é igual "Maria Leopoldina"
?>