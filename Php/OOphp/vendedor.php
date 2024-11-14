<?php
require_once "./funcionario.php";
class Vendedor extends Funcionario
{
function __construct($nome, $salario)
{
    parent::__construct($nome, $salario);
 }

function calcularSalario()
{
    return $this->getSalario()*1.10;
}
}
