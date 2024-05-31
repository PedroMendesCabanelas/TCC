<?php

    session_start();

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
      unset($_SESSION['email']);
      unset($_SESSION['senha']);
      header('Location: login.php');
    }

    $logado = $_SESSION['email'];


    if(isset($_POST['submit']))
    {

      include_once('config.php');

      $tipo = $_POST['tipo'];
      $marca = $_POST['marca'];
      $cor = $_POST['cor'];
      $placa = $_POST['placa'];

      $result = mysqli_query($conexao, "INSERT INTO veiculos(email,tipo,marca,cor,placa) 
      VALUES ('$logado','$tipo','$marca','$cor','$placa')");

      if($logado == 'adm@gmail.com')
      {
          header('Location: gerenciar.php');
      }
      else
      {
          header('Location: veiculos.php');
      }
    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Adicionar Veículo</title>
  <style>
      body{
        /*background-color: rgb(88, 88, 89);*/
        background-image: url(FundoLoginCadastro.png);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
      }
      .box{
        color: white;
        position: absolute;
        top: 55%;
        left: 50%;
        transform: translate(-50%,-50%);
        background-color: rgba(0, 0, 0, 0.6);
        padding: 15px;
        padding-top: 30px;
        border-radius: 15px;
        /* width: 20%; */
      }
      fieldset{
        border: 3px solid rgb(255, 193, 7);
        padding: 15px;
      }
      legend{
        border: 1px solid rgb(255, 193, 7);
        position:absolute;
        top: 6.5%;
        left: 50%;
        transform: translate(-50%,-50%);
        padding: 5px;
        width: 40%;
        text-align: center;
        background-color: rgb(255, 193, 7);
        color: black;
        border-radius: 8px;
        font-size: 17px;
      }
      .inputBox{
        position: relative;
      }
      .inputUser{
        background: none;
        border: none;
        border-bottom: 1px solid white;
        outline: none;
        color: white;
        font-size: 15px;
        width: 100%;
        letter-spacing: 1px;
      }
      .labelInput{
        position: absolute;
        top: 0%;
        left: 0%;
        pointer-events: none;
        transition: .5s;
      }
      .inputUser:focus ~ .labelInput,
      .inputUser:valid ~ .labelInput{
        top: -20px;
        font-size: 12px;
        color: rgb(255, 211, 79);
      }
      #submit{
        background-color: rgb(255, 193, 7);
        width: 100%;
        border: none;
        padding: 15px;
        color: black;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;
      }
      #submit:hover{
        background-color: rgb(255, 211, 79);
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
        top: 12.5%;
        left: 5%;
      }
      .box{
        color: white;
        position: absolute;
        top: 55%;
        left: 50%;
        transform: translate(-50%,-50%);
        background-color: rgba(0, 0, 0, 0.6);
        padding: 15px;
        padding-top: 30px;
        border-radius: 15px;
        width: 60%;
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
        <a href="sair.php" class="btn btn-danger me-5">Sair</a>
      </div>
    </nav>
    <?php if ($logado == "adm@gmail.com"){ ?>
        <a href="gerenciar.php" class="btnVoltar">Voltar</a>
    <?php }else{ ?>
        <a href="veiculos.php" class="btnVoltar">Voltar</a>
    <?php } ?>
    <div class="box">
        <form action="addveiculo.php" method="POST">
            <fieldset>
                <legend><b>Novo Veículo</b></legend>
                <br>
                <p>Tipo:</p>
                <input type="radio" name="tipo" id="carro" value="carro" required>
                <label for="carro" class="labelTipo">Carro</label>
                <br>
                <input type="radio" name="tipo" id="moto" value="moto" required>
                <label for="moto" class="labelTipo">Moto</label>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="marca" id="marca" class="inputUser" required>
                    <label for="marca" class="labelInput">Marca</label>
                </div>
                <br><br>
                <div class="inputBox">
                  <input type="text" name="cor" id="cor" class="inputUser" required>
                  <label for="cor" class="labelInput">Cor</label>
                </div>
                <br><br>
                <div class="inputBox">
                  <input type="text" name="placa" id="placa" class="inputUser" required>
                  <label for="placa" class="labelInput">Placa</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>