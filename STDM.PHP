<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CÁLCULO DE METAS</title>
  <link rel='stylesheet' type='text/css' media='screen' href='estilizacao.css'>
<style>

</style>

</head>
<body>
  <h1>CÁLCULO DE METAS</h1>
  <form action="" method="POST">
    <label for="nome">Nome do funcionário</label><br>
    <input type="text" id="nome" name="nome" placeholder="Digite seu nome aqui" required><br><br>
    <label for="semana1">Semana 1</label>
    <input type="text" id="semana1" name="semana1" placeholder="Digite o valor da semana 1" required><br><br>
    <label for="semana2">Semana 2</label>
    <input type="text" id="semana2" name="semana2" placeholder="Digite o valor da semana 2" required><br><br>
    <label for="semana3">Semana 3</label>
    <input type="text" id="semana3" name="semana3" placeholder="Digite o valor da semana 3" required><br><br>
    <label for="semana4">Semana 4</label>
    <input type="text" id="semana4" name="semana4" placeholder="Digite o valor da semana 4" required><br><br>
    <label for="mensal">Valor Mensal</label>
    <input type="text" id="mensal" name="mensal" placeholder="Digite o valor mensal" required><br><br>
    <button class="glow-on-hover" type="submit">CALCULAR</button>
  </form>
  <div class="resultado">
  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = filter_input(INPUT_POST, "nome");
    $semana1 = filter_input(INPUT_POST, "semana1");
    $semana2 = filter_input(INPUT_POST, "semana2");
    $semana3 = filter_input(INPUT_POST, "semana3");
    $semana4 = filter_input(INPUT_POST, "semana4");
    $mensal = filter_input(INPUT_POST, "mensal");

    $salarioM = 1927.02;
    $metaS = 20000;
    $metaM = 80000;

    // Variável semanal +
    $bonificacaoSemanal = 0;
    if ($semana1 >= $metaS) {
        $bonificacaoSemanal += $metaS * 0.01;
    }
    if ($semana2 >= $metaS) {
        $bonificacaoSemanal += $metaS * 0.01;
    }
    if ($semana3 >= $metaS) {
        $bonificacaoSemanal += $metaS * 0.01;
    }
    if ($semana4 >= $metaS) {
        $bonificacaoSemanal += $metaS * 0.01;
    }

    // Variável semanal -
    $porcentagemSemanal = 0;
    if ($semana1 > $metaS) {
        $porcentagemSemanal += ($semana1 - $metaS) * 0.05;
    }
    if ($semana2 > $metaS) {
        $porcentagemSemanal += ($semana2 - $metaS) * 0.05;
    }
    if ($semana3 > $metaS) {
        $porcentagemSemanal += ($semana3 - $metaS) * 0.05;
    }
    if ($semana4 > $metaS) {
        $porcentagemSemanal += ($semana4 - $metaS) * 0.05;
    }

    // Variável mensal
    $bonificacaoMensal = 0;
    if ($mensal > $metaM) {
        $bonificacaoMensal = ($mensal - $metaM) * 0.1;
    }

    $totalBonificacao = $bonificacaoSemanal + $porcentagemSemanal + $bonificacaoMensal;
    $salarioFinal = $salarioM + $totalBonificacao;

    echo "<h2>Resultados</h2>";
    echo "<p>Nome do Funcionário: $nome</p>";
    echo "<p>Bonificação Semanal: R$ " . number_format($bonificacaoSemanal, 2) . "</p>";
    echo "<p>Porcentagem Semanal: R$ " . number_format($porcentagemSemanal, 2) . "</p>";
    echo "<p>Bonificação Mensal: R$ " . number_format($bonificacaoMensal, 2) . "</p>";
    echo "<p>Total de Bonificação: R$ " . number_format($totalBonificacao, 2) . "</p>";
    echo "<p>Salário Final: R$ " . number_format($salarioFinal, 2) . "</p>";
}
?>


  </div>
  
</body>
</html>