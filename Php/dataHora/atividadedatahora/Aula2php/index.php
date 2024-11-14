<?php
/*Exercicios Propostos:*/
echo"Nº1";
echo "<br>";
$amanha = time() + 86400;
$ontem = time() - 86400;

echo "Ontem->" . date("d/m/Y H:i:s", $ontem) . "<br>";
echo "Data de hoje-> " . date("d/m/Y H:i:s", time()) . "<br>";
echo "Amanhã-> " . date("d/m/Y H:i:s", $amanha);
?>