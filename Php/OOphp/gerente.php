<?php
require_once "./funcionario.php";
class Gerente extends Funcionario
{
function __construct($nome, $salario)
{
    parent::__construct($nome, $salario);
 }

function calcularSalario()
{
    return $this->getSalario()*1.20;
}  
}