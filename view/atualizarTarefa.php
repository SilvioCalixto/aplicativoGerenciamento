<?php
namespace OrganizacaoTarefas\view;

require_once("../model/Tarefa.php");
require_once("../model/Usuario.php");

session_start();

use OrganizacaoTarefas\model\Tarefa;
use OrganizacaoTarefas\model\Usuario;

if(!isset($_GET['id'])){
    header("Location: consultarTarefa.php");
    exit;
}
$id = $_GET['id'];

if(!isset($_SESSION['tarefas'][$id])){
    echo "Tarefa não encontrada";
    exit;
}

$tarefa = $_SESSION['tarefas'][$id];

if(isset($_POST['concluir'])){
    $_SESSION['tarefas'][$id]->concluida = true;
    header("Location: consultarTarefa.php");
    exit;
}

if(isset($_POST['atualizar'])){
    $_SESSION['tarefas'][$id]->tarefa = $_POST['tarefa'];
    $_SESSION['tarefas'][$id]->prioridade = $_POST['prioridade'];
    $_SESSION['tarefas'][$id]->prazo = $_POST['prazo'];
    $_SESSION['tarefas'][$id]->lembrete = $_POST['lembrete'];

    header("Location: consultarTarefa.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Editar Tarefa</title>
<link rel="stylesheet" href="../css/style.css">
</head>

<body>

<main>
    <h1>Editar Tarefa</h1>
    
    <form method="POST">
    
    <label>Tarefa:</label>
    <input type="text" name="tarefa" value="<?= $tarefa->tarefa ?>">
    <br>
    
    <label>Prioridade:</label>
    <select name="prioridade">
    
    <option value="baixo" <?= $tarefa->prioridade == "Baixo" ? "selected" : "" ?>>Baixo</option>
    
    <option value="medio" <?= $tarefa->prioridade == "Médio" ? "selected" : "" ?>>Médio</option>
    
    <option value="alto" <?= $tarefa->prioridade == "Alto" ? "selected" : "" ?>>Alto</option>
    
    </select>
    
    <br>
    
    <label>Prazo:</label>
    <input type="date" name="prazo" value="<?= $tarefa->prazo ?>">
    <br>
    
    <label>Lembrete:</label>
    <input type="datetime-local" name="lembrete" value="<?= $tarefa->lembrete ?>">
    <br>
    
    <div>
        <button type="submit" name="atualizar">Atualizar</button>
        <button type="submit" name="concluir">Concluir Tarefa</button>
    </div>
    
    </form>
    
    <br>
    
    <button><a href="consultarTarefa.php">Voltar</a></button>
  </main>
  <footer>
    Desenvolvido por <a href="https://github.com/SilvioCalixto" target="_blank">Silvio Calixto</a>
  </footer>

</body>
</html>