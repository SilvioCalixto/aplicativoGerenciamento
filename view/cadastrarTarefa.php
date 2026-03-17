<?php
namespace OrganizacaoTarefas\view;

require_once("../model/Usuario.php");
require_once("../model/Tarefa.php");

session_start();

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
<main>
  <body>
    <h1>Cadastrar Tarefa</h1>
    <form method="POST">
      <label>Descreva Sua Tarefa: </label>
      <input type="text" name="tarefa" id="tarefa">
      <br>
      <label>Qual O Nivel de Prioridade?: </label>
      <select name="prioridade" id="prioridade">
        <option value="baixo">Baixo</option>
        <option value="medio">Médio</option>
        <option value="alto">Alto</option>
      </select>
      <br>
      <label>Quando será sua tarefa?: </label>
      <input type="date" name="prazo" id="prazo">
      <br>
      <label>Quando gostaria de ser lembrado?: </label>
      <input type="date" name="lembrete" id="lembrete">
      <br>
      <div class="buttons">
        <button type="submit"><strong>Cadastrar</strong></button>
        <button><a href="menu.php">Voltar</a></button>
      </div>
    </form>
     <?php
  
  if($_POST){
  
      try{
          $tarefa = $_POST['tarefa'];
          $prioridade = $_POST['prioridade'];
          $prazo = $_POST['prazo'];
          $lembrete = $_POST['lembrete'];
          $usuarioLogado = $_SESSION['usuarioLogado'];
  
          $entradaTarefa = new Tarefa(
                                      $tarefa,
                                      $prioridade,
                                      $prazo,
                                      $lembrete,
                                      $usuarioLogado->codigo
          );
  
          $_SESSION['tarefas'][] = $entradaTarefa;
  
          echo $entradaTarefa->imprimir();
  
          }catch(Exception $erro){
  
              echo "Algo deu errado!!! <br> $erro";
  
          }
          if($lembrete == $prazo){
            echo "<br><br><strong>Atenção a data da tarefa</strong>";
          }
  
    }
  
  
  
  ?>
  </main>
  <footer>
    Desenvolvido por <a href="https://github.com/Alysontrz" target="_blank">Alyson Santos</a> e <a href="https://github.com/SilvioCalixto" target="_blank">Silvio Calixto</a>
  </footer>
</body>
</html>
