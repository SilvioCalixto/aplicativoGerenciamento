<?php 
  namespace OrganizacaoTarefas\view;
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
    <label>Nome de Usuário:</label>
    <input type="text" name="name" id="name">
    <br>
    <label>Senha do Usuário:</label>
    <input type="password" name="senha" id="senha">
    <br>
    <button type="submit"><a href="menu.php">Acessar</a></button>
  </form>
  <a href="cadastrarUsuario.php">Não tem um acesso? Cadastre-se...</a>
</body>
</html>