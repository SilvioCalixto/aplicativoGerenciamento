<?php
namespace OrganizacaoTarefas\view;

require_once("../model/Tarefa.php");
require_once("../model/Usuario.php");

session_start();

use OrganizacaoTarefas\model\Tarefa;
use OrganizacaoTarefas\model\Usuario;

if(!isset($_SESSION['usuarioLogado'])){
    header("Location: index.php");
    exit;
}

if(!isset($_GET['id'])){
    header("Location: consultarTarefa.php");
    exit;
}

$id = $_GET['id'];

if(isset($_SESSION['tarefas'][$id])){
    unset($_SESSION['tarefas'][$id]);
}

header("Location: consultarTarefa.php");
exit;