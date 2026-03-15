<?php 
  namespace OrganizacaoTarefas\view;

  require_once("../model/Tarefa.php");
  require_once("../model/Usuario.php");

  session_start();

  use OrganizacaoTarefas\model\Tarefa;
  use OrganizacaoTarefas\model\Usuario;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consultar Tarefas</title>
</head>
<body>
  <h1>Gerenciamento de Tarefas</h1>
<?php

    if (!empty($_SESSION['tarefas'])) {

        $usuarioLogado = $_SESSION['usuarioLogado'];

        foreach ($_SESSION['tarefas'] as $indice => $tarefa) {

            if($tarefa->usuarioCodigo == $usuarioLogado->codigo){

                echo "<div style='border:1px solid #ccc; padding:10px; margin:10px'>";
                echo $tarefa->imprimir();
                echo "</div>";
                echo "<a href='atualizarTarefa.php?id=$indice'>Editar</a>";
                echo " | ";
                echo "<a href='deletarTarefa.php?id=$indice'>Excluir</a>";

            }

    }

    } else {

        echo "Nenhuma tarefa cadastrada ainda.";

    }

    

?>
  <br>
  <br>

  <button><a href="menu.php">Voltar</a></button>

</body>
</html>