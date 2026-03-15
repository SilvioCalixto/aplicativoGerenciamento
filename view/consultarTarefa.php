<?php 
  namespace OrganizacaoTarefas\view;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aqui estão suas tarefas: </title>
  <?php 
    session_start();

    if (!empty($_SESSION['tarefas'])) {
      foreach ($_SESSION['tarefas'] as $indice => $tarefa) {
        echo "<div>";
        echo $tarefa->imprimir();
        echo "</div>";
      }
    } else {
      echo "Nenhuma tarefa cadastrada ainda.";
    }
  ?>
</head>
<body>
    
</body>
</html>