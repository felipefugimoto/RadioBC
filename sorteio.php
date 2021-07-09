<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://webness.com.br/radiobc/wp-content/uploads/2020/12/icon2.png" type="image/x-icon">
    <title>Promoções - Radio Camboriu FM </title>
  </head>
  <body>
    <form action="cadastro.php" method="post"></form>

    <?php
    
    
      // Matriz com todos os participantes
      $participantes = array("Rafael", "João", "Maria", "Pedro", "Patricia", "Camila", "Roberto"," Felipe");
      // Definindo o número de participantes
      $numParticipantes = sizeof($participantes);
      // Informações adicionais
      $chances = round((1 / $numParticipantes) * 100);
      echo "- Temos no total <b>".$numParticipantes."</b> participantes; <br />";
      echo "- Cada participante teve <b>".$chances."%</b> de chance de ganhar; <br /><br />";
      // Sorteando
      # Primeiro ganhador
      $sorteado[1] = $participantes[rand(0,$numParticipantes - 1)];
      # Segundo ganhador
      for ($i = 1; $i < 2; $i++) {
          $sorteado[2] = $participantes[rand(0,$numParticipantes - 1)];
          // Caso o ganhador já tenha saido, sorteia novamente.
          if ($sorteado[2] == $sorteado[1]) {
              --$i;
          }
      }
      # Terceiro ganhador
      for ($i = 1; $i < 2; $i++) {
          $sorteado[3] = $participantes[rand(0,$numParticipantes - 1)];
          // Caso o ganhador já tenha saido, sorteia novamente.
          if ($sorteado[3] == $sorteado[1] || $sorteado[3] == $sorteado[2]) {
              --$i;
          }
      }
      // Exibindo ganhadores
      echo "<b>Ganhadores:</b> <br />";
      echo "<b>1°</b> - " . $sorteado[1] . "<br />";
      echo "<b>2°</b> - " . $sorteado[2] . "<br />";
      echo "<b>3°</b> - " . $sorteado[3] . "<br />";
    ?><br>
<?php

      $loterica= array(1,2,3,4,5,6,7,8,9,10);
      $canhotos= sizeof($loterica);
      echo "Numero de Canhotos para o sorteio <b>".$canhotos."</b><br>";

      




?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>