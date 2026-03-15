<?php
namespace OrganizacaoTarefas\view;
require_once("../model/Usuario.php");
require_once("../model/Tarefa.php");

use Exception;
use OrganizacaoTarefas\model\Usuario;
use OrganizacaoTarefas\model\Tarefa;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <title>Cadastrar Tarefa</title>
</head>
<body>
  <h1>Cadastrar Tarefa</h1>
  <form method="POST">
    <label>Digite Sua Tarefa: </label>
    <input type="text" name="tarefa" id="tarefa">
    <br>
    <label>Qual O Nivel de Prioridade Da Sua Tarefa?: </label>
    <select name="prioridade" id="prioridade">
      <option value="baixo">Baixo</option>
      <option value="medio">Médio</option>
      <option value="alto">Alto</option>
    </select>
    <br>
    <label>Quantos dias para a conclusão da tarefa?: </label>
    <input type="date" name="prazo" id="prazo">
    <br>
    <label>Quando gostaria de ser lembrado da sua Tarefa: </label>
    <input type="datetime-local" name="lembrete" id="lembrete">
    <br>
    <div class="buttons">
      <button type="submit">Cadastrar</button>
      <button><a href="menu.php">Voltar</a></button>
    </div>
  </form>
   <?php
    session_start();
    try{

      $tarefa =$_POST['tarefa'];
      $prioridade =$_POST['prioridade'];
      $prazo =$_POST['prazo'];
      $lembrete =$_POST['lembrete'];

      $entradaTarefa =  new Tarefa($tarefa,$prioridade,$prazo,$lembrete);
      $_SESSION['tarefas'][] = $entradaTarefa;

      
    }catch(Exception $erro){
      echo "Algo deu errado!!!<br><br> $erro";
    }

  ?>

    <h3> 
       <?php
          echo $entradaTarefa->imprimir();
        ?>
    </h3>
</body>
</html>
