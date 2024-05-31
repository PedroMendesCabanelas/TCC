<?php

    session_start();
    //print_r($_SESSION);

    include('config.php');

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }

    $logado = $_SESSION['email'];

    //$sql = "SELECT * FROM veiculos ORDER BY id DESC";
    $sql = "SELECT * FROM veiculos WHERE email = '$logado'";

    $result = $conexao -> query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Veículos</title>
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
      .btnVoltar{
          text-decoration: none;
          background-color: rgba(0, 0, 0, 0.9);
          border: 3px solid rgb(255, 193, 7);
          padding: 10px;
          border-radius: 10px;
          color: white;
          font-size: 15px;
          position: fixed;
          top: 11%;
          left: 5%;
      }
      .btnVoltar:hover{
          background-color: rgb(255, 193, 7);
          color: black;
          cursor: pointer;
      }
      .navbar-brand{
        color: black;
      }
      @media screen and (max-width: 800px){
      .btnVoltar{
        text-decoration: none;
        background-color: rgba(0, 0, 0, 0.9);
        border: 3px solid rgb(255, 193, 7);
        padding: 10px;
        border-radius: 10px;
        color: white;
        font-size: 12px;
        position: fixed;
        top: 11%;
        left: 5%;
      }
    }
  </style>
</head>
<body>
    <a href="sistema.php" class="btnVoltar">Voltar</a>
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
      <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Estacionamento Inteligente</span>
      </div>
      <div class="d-flex">
        <a href="addveiculo.php" class="btn btn-success me-2">Adicionar</a>
      </div>
      <div class="d-flex">
        <a href="sair.php" class="btn btn-danger me-5">Sair</a>
      </div>
    </nav>
    <br>
    <?php
        echo "<h1>Seus veículos</h1>";
    ?>
    <br><br>
    <div class="m-5">
      <table class="table">
          <thead class="table-secondary">
              <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Marca</th>
                  <th scope="col">Cor</th>
                  <th scope="col">Placa</th>
                  <th scope="col">Editar/Deletar</th>
              </tr>
          </thead>
          <tbody>
              <?php
                  while($user_data = mysqli_fetch_assoc($result))
                  {
                      echo "<tr>";
                      echo "<td>".$user_data['id']."</td>";
                      echo "<td>".$user_data['tipo']."</td>";
                      echo "<td>".$user_data['marca']."</td>";
                      echo "<td>".$user_data['cor']."</td>";
                      echo "<td>".$user_data['placa']."</td>";
                      echo "<td>
                              <a class= 'btn btn-sm btn-primary' href='editveiculo.php?id=$user_data[id]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/>
                                </svg>
                              </a>
                              <a class= 'btn btn-sm btn-danger' href='deleteveiculo.php?id=$user_data[id]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
                                </svg>
                              </a>
                            </td>";
                      echo "</tr>";
                  }
              ?>
          </tbody>
        </table>
    </div>
</body>
</html>