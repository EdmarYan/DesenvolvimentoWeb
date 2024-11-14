<?php
abstract class Funcionario
{
private $nome;
private $salario;


function getNome()
{
    return $this -> nome;
}
function setNome($nome)
{
    $this-> nome = $nome;
}
function getSalario()
{
    return $this ->salario;
}
function setSalario($salario)
{
    $this-> salario = $salario;
}


function __construct($nome,$salario)
{
$this->nome=$nome;
$this->salario=$salario;
}

abstract public function calcularSalario();

}
?>