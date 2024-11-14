<?php
require_once "./gerente.php";
require_once "./vendedor.php";

if (isset($_GET['nome']) && isset($_GET['salario']) && isset($_GET['tipo'])) {
    $nome = $_GET['nome'];
    $salario = $_GET['salario'];
    $tipo = $_GET['tipo'];

    if ($tipo == 'gerente') {
        $funcionario = new Gerente($nome, $salario);
    } else {
        $funcionario = new Vendedor($nome, $salario);
    }

    $salarioFinal = $funcionario->calcularSalario();
} else {
    $salarioFinal = null;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Salário</title>
</head>
<body>
    <form action="" method="get">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <br>
        <label for="salario">Salário:</label>
        <input type="number" id="salario" name="salario" required>
        <br>
        <br>
        <label for="tipo">Tipo de Funcionário:</label>
        <select id="tipo" name="tipo" required>
            <option value="gerente">Gerente</option>
            <option value="vendedor">Vendedor</option>
        </select>
        <br>
        <br>
        <button type="submit">Calcular Salário</button>
    </form>

    <?php if ($salarioFinal !== null): ?>
        <h2>Resultado:</h2>
        <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
        <p><strong>Salário Base:</strong> R$ <?php echo number_format($salario, 2, ',', '.'); ?></p>
        <p><strong>Salário Final com Bônus:</strong> R$ <?php echo number_format($salarioFinal, 2, ',', '.'); ?></p>
    <?php endif; ?>
</body>
</html>
