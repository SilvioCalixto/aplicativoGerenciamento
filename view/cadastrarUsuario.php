<?php 
  namespace OrganizacaoTarefas\view;
  require_once("../model/Usuario.php");

  use OrganizacaoTarefas\model\Usuario;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <title>Cadastrar Usuário</title>
</head>
<body>

  <h1>Cadastrar Usuário</h1>
  <form method="POST">
      <label>Código: </label>
      <input type="number" name="codigo" id="codigo">
      <br>
      <label>Nome: </label>
      <input type="text" name="nome" id="nome">
      <br>
      <label>E-mail: </label>
      <input type="string" name="email" id="email">
      <br>
      <label>Senha: </label>
      <input type="password" name="senha" id="senha">
      <br>
      <div class="buttons">
        <button type="submit">Cadastrar</button>
        <button><a href="index.php">Voltar</a></button>
      </div>
  </form>
  <?php 
  
    if($_POST){

   $codigo = $_POST['codigo'];
   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $senha = $_POST['senha'];

   $usuario = new Usuario($codigo,$nome,$email,$senha);

   header("Location: index.php");
}
  ?>  
    <h3>
      <?php
         echo $usuario->imprimir();
      ?>
    </h3>

  
</body>
</html>