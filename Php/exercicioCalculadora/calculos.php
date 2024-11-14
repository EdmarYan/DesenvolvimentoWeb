<?php
//incluir na classe calculos, eu devo fazer isso,
//pois quando faço essa classe e incluida no meu script, e dai eu consigo usa-la no lugar de um script 100% orientado.
//require_once de acordo com pesquisado, adiciona minha classe ao script so uma vez, mas não entendi direito...
require_once('calculos.php');

//capturar os numeros do form:
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];

        $operacao = $_GET['operacao'];

        $resultado = 0;
    
    //instanciamento de classe 0_0
    $calculo = new calculos($numero1, $numero2);

//calculos:
switch ($operacao) {
    case 'somar':
        $resultado = $calculo->somar();
        break;
    case 'subtrair':
        $resultado = $calculo->subtrair();
        break;
    case 'multiplicar':
        $resultado = $calculo->multiplicar();
        break;
    case 'dividir':
        $resultado = $calculo->dividir();
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostra Resultado</title>
</head>
<body>
    <h1><b>Operação: <br><?php echo"$operacao";?></b></h1>
    <h1><b>Resultado: <br><?php echo"$resultado";?></b></h1>
    <a href="index.php">VOLTAR</a>
</body>
</html>
    
<?php
//minha classe e metodos:
class calculos{
    private $numero1;
    private $numero2;

    //construtor:
    public function __construct($numero1, $numero2){
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;
    }

    //metodos de calculo:
    public function somar(){
        return $this -> numero1 + $this -> numero2;
    }
    public function subtrair(){
        return $this -> numero1 - $this -> numero2;
    }
    public function multiplicar(){
        return $this -> numero1 * $this -> numero2;
    }
    public function dividir(){
        if ($this->numero2 != 0) {
            return $this->numero1 / $this->numero2;
        } else {
            return "não é permitido dividir por 0";
        }
    }

}
?>