<?php

  session_start();

  if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
  {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
  }

  $logado = $_SESSION['email'];

  if(!empty($_GET['id']))
  {

    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM veiculos WHERE id = $id";

    $result = $conexao -> query($sqlSelect);

    if($result -> num_rows > 0)
    {
        $sqlDelete = "DELETE FROM veiculos WHERE id=$id";
        $resultDELETE = $conexao -> query($sqlDelete);
    }

  }

  if($logado == 'adm@gmail.com')
  {
      header('Location: gerenciar.php');
  }
  else
  {
      header('Location: veiculos.php');
  }

?>