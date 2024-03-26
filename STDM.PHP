<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CÁLCULO DE METAS</title>
  <link rel='stylesheet' type='text/css' media='screen' href='estilizacao.css'>
</head>
<body>
  <h1>CÁLCULO DE METAS</h1>
  <form action="processar_dados.php" method="POST">
    <label for="nome">Nome do funcionário</label><br>
    <input type="text" id="nome" name="nome" placeholder="Digite seu nome aqui" required>
    <br><br>
    <label for="semana1">Semana 1</label>
    <input type="text" id="semana1" name="semana1" placeholder="Digite o valor da semana 1" required>
    <br><br>
    <label for="semana2">Semana 2</label>
    <input type="text" id="semana2" name="semana2" placeholder="Digite o valor da semana 2" required>
    <br><br>
    <label for="semana3">Semana 3</label>
    <input type="text" id="semana3" name="semana3" placeholder="Digite o valor da semana 3" required>
    <br><br>
    <label for="semana4">Semana 4</label>
    <input type="text" id="semana4" name="semana4" placeholder="Digite o valor da semana 4" required>
    <br><br>
    <label for="mensal">Valor Mensal</label>
    <input type="text" id="mensal" name="mensal" placeholder="Digite o valor mensal" required>
    <br><br>
    <button class="glow-on-hover" type="button">CALCULAR</button>
  </form>

  <?php
  $nome = filter_input(INPUT_POST, "nome");
  $semana1 = filter_input(INPUT_POST, "semana1");
  $semana2 = filter_input(INPUT_POST, "semana2");
  $semana3= filter_input(INPUT_POST, "semana3");
  $semana4 = filter_input(INPUT_POST, "semana4");
  $mensal = filter_input(INPUT_POST, "mensal");
   
    $salarioM = 1927.02;
    $metaS = 20000;
    $metaM = 80000;
    
    // Variável semanal +
    if ($semana1 >= $metaS) {
      $valor1 = $metaS * 0.01;  
      echo "$valor1";
    }
    if ($semana2 >= $metaS) {
      $valor2 = $metaS * 0.01;
      echo "$valor2";
    }
    if ($semana3 >= $metaS) {
      $valor3 = $metaS * 0.01;
      echo "$valor3";
    }
    if ($semana4 >= $metaS) {
      $valor4 = $metaS * 0.01;
      echo "$valor4";
    }

    // Variável semanal -
    if ($semana1 > $metaS) {
      $porcentagem1 = ($semana1 - $metaS) * 0.05;
      echo "$porcentagem1";
    }
    if ($semana2 > $metaS) {
      $porcentagem = ($semana2 - $metaS) * 0.05;
      echo "$porcentagem2";
    }
    if ($semana3 > $metaS) {
      $porcentagem3 = ($semana3 - $metaS) * 0.05;
      echo "$porcentagem3";
    }
    if ($semana4 > $metaS) {
      $porcentagem4 = ($semana4 - $metaS) * 0.05;
      echo "$porcentagem4";
    }

    // Variável mensal
    if ($mensal > $metaM) {
      $valorM = ($mensal - $metaM) * 0.1;
      echo "$valorM";
    }
  

 
  ?>
</body>
</html>
