<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA</title>
</head>
<body>
    <h1>Calculadora:</h1>
    <form action="calculos.php" method="GET">
        <label>1º NUMERO:<input type="text" name="numero1" id=""></label>
        <label>OPERAÇÃO:
            <select name="operacao">
                <option value="somar">+</option>
                <option value="subtrair">-</option>
                <option value="multiplicar">*</option>
                <option value="dividir">/</option>
            </select>
        <label>2º NUMERO:<input type="text" name="numero2" id=""></label>
        <button type="submit" name="enviar" id="enviar">ENVIAR</button>
    </form>
</body>
</html>