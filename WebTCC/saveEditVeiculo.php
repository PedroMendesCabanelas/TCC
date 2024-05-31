<?php 

    session_start();
    
    include_once('config.php');

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
      unset($_SESSION['email']);
      unset($_SESSION['senha']);
      header('Location: login.php');
    }

    $logado = $_SESSION['email'];

    if(isset($_POST['update']))
    {
      $id = $_POST['id'];
      $tipo = $_POST['tipo'];
      $marca = $_POST['marca'];
      $cor = $_POST['cor'];
      $placa = $_POST['placa'];

      $sqlUpdate = "UPDATE veiculos SET tipo='$tipo',marca='$marca',cor='$cor',placa='$placa' WHERE id='$id'";

      $result = $conexao -> query($sqlUpdate);
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