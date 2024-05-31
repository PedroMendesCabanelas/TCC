<?php

    session_start();

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }

    $logado = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Adm | Estacionamento</title>
  <style>
      body{
          /*background-color: rgb(88, 88, 89);*/
          background-image: url(FundoLoginCadastro.png);
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
          background-position: center;
          color: white;
          text-align: center;
      }
      .navbar-brand{
        color: black;
      }
      h2{
        color: black;
      }
      @media screen and (max-width: 800px){
      img{
        height: 70%;
        width: 70%;
      }
    }
  </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
      <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Estacionamento Inteligente</span>
      </div>
      <div class="d-flex">
        <a href="gerenciar.php" class="btn btn-primary me-2">Gerenciar</a>
      </div>
      <div class="d-flex">
        <a href="sair.php" class="btn btn-danger me-5">Sair</a>
      </div>
    </nav>
    <br>
    <?php
        echo "<h1>Bem-vindo <u>Adm</u>!</h1>";
    ?>
    <br><br>
    <h2><b>VAGAS DISPONÍVEIS</b></h2>
    <img src="ModeloEstacionamento.png" height="40%" width="40%">
</body>
</html>