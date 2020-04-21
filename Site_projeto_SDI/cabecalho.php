<?php

session_start();

if (!isset($_SESSION['nome'])){
  header('Location: index.php');
}


?>

<!doctype html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/main.css">
  <title>Criação de chamado</title>


</head>

<body>
<div class="container-fluid">

  <div class="row">

    <div class="col-3 bg text-left">
      <img src="./img/logo_pequena.PNG" alt="" class="rounded-circle " id="perfil-foto">
    </div>
    <div class="col-3 bg text-center p-3">
      <div class="btn-group  text-right" role="group">
        <a href="abrirChamado.php" class="btn btn-primary mt-4">Novo Chamado</a>
      </div>
    </div>

    <div class="col-3 bg text-left p-3">
      <div class="btn-group  text-right" role="group">
        <a href="lista_chamado.php" class="btn btn-success mt-4">Visualizar chamados</a>
      </div>
    </div>
    <div class="col-3 bg text-right p-3">
      <div class="btn-group  mr-4" role="group">
        <a href="logout.php" class="btn btn-danger mt-4 p-1.5">Sair</a>
      </div>
    </div>


  </div>
</div>