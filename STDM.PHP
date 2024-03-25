<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULO DE METAS</title>
    <link rel='stylesheet' type='text/css' media='screen' href='estilizacao.css'>
</head>
<body>
    <h1>CALCULO DE METAS
    </h1>
    <div>
    <form action="processar_dados.php" method="POST">
        <label for="nome">Nome do funcionario</label>
        <input type="text" id="nome" name="nome" placeholder="Digite  aqui" required>
        <br><br>
      
    </form>
    <form action="processar_dados.php" method="POST">
        <label for="nome">semana 1</label>
        <input type="number" id="semana1" name="semana1" placeholder="Digite  aqui" required>
        <br><br>
       
    </form>
    <form action="processar_dados.php" method="POST">
        <label for="nome">semana 2</label>
        <input type="number" id="semana2" name="semana2" placeholder="Digite aqui" required>
        <br><br>
        
    </form>
    <form action="processar_dados.php" method="POST">
        <label for="nome">semana 3</label>
        <input type="number" id="semana3" name="semana3" placeholder="Digite aqui" required>
        <br><br>
      
    </form>
    <form action="processar_dados.php" method="POST">
        <label for="nome">semana 4</label>
        <input type="number" id="semana4" name="semana4" placeholder="Digite aqui" required>
        <br><br>
        
    </form>
    <form action="processar_dados.php" method="POST">
        <label for="nome">Valor Mensal</label>
        <input type="number" id="total" name="mensal" placeholder="Digite  aqui" required>
        <br><br>
        <a href="/" class="bn5">Calcular</a>
    </form>
    </div>
</body>
</html>
  <?php
$nome = filter_input(INPUT_POST, "nome");
$nome = filter_input(INPUT_POST, "semana1");
$nome = filter_input(INPUT_POST, "semana2");
$nome = filter_input(INPUT_POST, "semana3");
$nome = filter_input(INPUT_POST, "semana4");
$nome = filter_input(INPUT_POST, "mensal");
  ?>
  
  

