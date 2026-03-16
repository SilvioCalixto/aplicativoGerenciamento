<?php 
  namespace OrganizacaoTarefas\view;

  require_once("../model/Usuario.php");

  session_start();

  use OrganizacaoTarefas\model\Usuario;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <title>Organizador de Tarefas</title>
</head>
<body>
  <h1>Bem Vindo ao Organizador de Tarefas.</h1>
  

  <form method="POST">
  <h3>Faça seu Login ou Cadastre-se!</h3>
    <label>E-mail de Usuário:</label>
    <input type="email" name="email" id="email" placeholder="usuario@exemplo.com.br">
    <br>
    <label>Senha do Usuário:</label>
    <input type="password" name="senha" id="senha" >
    <br>
    <button type="submit">Acessar</button>
  </form>
  <?php

if($_POST){

$emailDigitado = $_POST['email'];
$senhaDigitada = $_POST['senha'];

$loginValido = false;

if(!empty($_SESSION['usuarios'])){

    foreach($_SESSION['usuarios'] as $usuario){

        if($usuario->email == $emailDigitado){

            if($usuario->verificarSenha($senhaDigitada)){

                $loginValido = true;

                $_SESSION['usuarioLogado'] = $usuario;

                break;
            }

        }

    }

}

if($loginValido){

    header("Location: menu.php");

}else{

    echo "Email ou senha incorretos";

}



}
?>
  <a href="cadastrarUsuario.php">Não tem um acesso? Cadastre-se...</a>
</body>
</html>