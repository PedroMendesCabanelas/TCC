<?php

    session_start();

    include('config.php');

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }

    $logado = $_SESSION['email'];

    $sql = "SELECT * FROM usuarios WHERE email = '$logado'";

    $result = $conexao -> query($sql);

    $user_data = mysqli_fetch_assoc($result);

    $nome_logado = $user_data['nome'];

    $sqlSelect = "SELECT * FROM vagasCarro WHERE id = '1'";

    $result2 = $conexao -> query($sqlSelect);

    while($user_data2 = mysqli_fetch_assoc($result2))
    {
        $vaga1 = $user_data2['vaga1'];
        $vaga2 = $user_data2['vaga2'];
        $vaga3 = $user_data2['vaga3'];
        $vaga4 = $user_data2['vaga4'];
        $vaga5 = $user_data2['vaga5'];
        $vaga6 = $user_data2['vaga6'];
        $vaga7 = $user_data2['vaga7'];
        $vaga8 = $user_data2['vaga8'];
        $vaga9 = $user_data2['vaga9'];
    }

    $sqlSelect2 = "SELECT * FROM vagasMoto WHERE id = '1'";

    $result3 = $conexao -> query($sqlSelect2);

    while($user_data3 = mysqli_fetch_assoc($result3))
    {
        $vaga10 = $user_data3['vaga1'];
        $vaga11 = $user_data3['vaga2'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Sistema | Estacionamento</title>
  <style>
      body{
          /*background-image: linear-gradient(to right, rgb(207, 207, 207), rgb(88, 88, 89));
          background-color: rgb(88, 88, 89);*/
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
      .container {
        position: relative;
        width: 40%; /* largura da imagem de fundo */
        height: 40%; /* altura da imagem de fundo */
     }
      .carro1 {
        position: absolute;
        top: 6%; /* posição vertical do carro */
        left: 84%; /* posição horizontal do carro */
        width: 9%; /* largura do carro */
        height: 25%; /* altura do carro */
        z-index: 1; /* certifica-se de que o carro está acima da imagem de fundo */
      }
      .carro2 {
        position: absolute;
        top: 6%; 
        left: 71%; 
        width: 9%; 
        height: 25%; 
        z-index: 1; 
      }
      .carro3 {
        position: absolute;
        top: 6%; 
        left: 58%; 
        width: 9%; 
        height: 25%; 
        z-index: 1; 
      }
      .carro4 {
        position: absolute;
        top: 6%; 
        left: 45%; 
        width: 9%; 
        height: 25%;
        z-index: 1; 
      }
      .carro5 {
        position: absolute;
        top: 6%; 
        left: 33%; 
        width: 9%; 
        height: 25%; 
        z-index: 1; 
      }
      .carro6 {
        position: absolute;
        top: 6%; 
        left: 20%; 
        width: 9%; 
        height: 25%; 
        z-index: 1; 
      }
      .carro7 {
        position: absolute;
        top: 6%; 
        left: 7%; 
        width: 9%; 
        height: 25%; 
        z-index: 1; 
      }
      .carro8 {
        position: absolute;
        transform: rotate(90deg);
        top: 74%; 
        left: 11%;
        width: 9%; 
        height: 25%;
        z-index: 1; 
      }
      .carro9 {
        position: absolute;
        transform: rotate(90deg);
        top: 74%; 
        left: 30%; 
        width: 9%; 
        height: 25%; 
        z-index: 1;
      }
      .moto1 {
        position: absolute;
        top: 76.5%;
        left: 44.5%; 
        width: 6%; 
        height: 18%;
        z-index: 1; 
      }
      .moto2 {
        position: absolute;
        top: 76.5%; 
        left: 51.5%; 
        width: 6%; 
        height: 18%; 
        z-index: 1; 
      }
      @media screen and (max-width: 800px){
        .container{
          height: 70%;
          width: 70%;
        }
        .carro1{
          top: 6%; 
          left: 81%;
        }
        .carro2{
          top: 6%; 
          left: 70%;
        }
        .carro6{
          top: 6%; 
          left: 21%;
        }
        .carro7{
          top: 6%; 
          left: 9%;
        }
        .carro8{
          top: 73%; 
          left: 12.5%;
        }
        .carro9{
          top: 73%; 
          left: 31%;
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
        <a href="veiculos.php" class="btn btn-primary me-2">Veículos</a>
      </div>
      <div class="d-flex">
        <a href="sair.php" class="btn btn-danger me-5">Sair</a>
      </div>
    </nav>
    <br>
    <?php
        echo "<h1>Bem-vindo(a) <u>$nome_logado</u>!</h1>";
    ?>
    <br><br>
    <h2><b>VAGAS DISPONÍVEIS</b></h2>
    <!-- <img src="ModeloEstacionamento.png" height="40%" width="40%"> -->
    <div id="conteudo">
      <div class="container">
        <img src="ModeloEstacionamento.png" alt="Imagem do Estacionamento" style="width:100%; height:100%;">
        <?php if ($vaga1 == "1"){ ?>
            <img src="carro.png" alt="Imagem do Carro 1" class="carro1">
        <?php } ?>
        <?php if ($vaga2 == "1"){ ?>
            <img src="carro.png" alt="Imagem do Carro 2" class="carro2">
        <?php } ?>
        <?php if ($vaga3 == "1"){ ?>
            <img src="carro.png" alt="Imagem do Carro 3" class="carro3">
        <?php } ?>
        <?php if ($vaga4 == "1"){ ?>
            <img src="carro.png" alt="Imagem do Carro 4" class="carro4">
        <?php } ?>
        <?php if ($vaga5 == "1"){ ?>
            <img src="carro.png" alt="Imagem do Carro 5" class="carro5">
        <?php } ?>
        <?php if ($vaga6 == "1"){ ?>
            <img src="carro.png" alt="Imagem do Carro 6" class="carro6">
        <?php } ?>
        <?php if ($vaga7 == "1"){ ?>
            <img src="carro.png" alt="Imagem do Carro 7" class="carro7">
        <?php } ?>
        <?php if ($vaga8 == "1"){ ?>
            <img src="carro.png" alt="Imagem do Carro 8" class="carro8">
        <?php } ?>
        <?php if ($vaga9 == "1"){ ?>
            <img src="carro.png" alt="Imagem do Carro 9" class="carro9">
        <?php } ?>
        <?php if ($vaga10 == "1"){ ?>
            <img src="moto.png" alt="Imagem da Moto 1" class="moto1">
        <?php } ?>
        <?php if ($vaga11 == "1"){ ?>
            <img src="moto.png" alt="Imagem da Moto 2" class="moto2">
        <?php } ?>
      </div>
    </div>

    <script>
        // Função para atualizar a página a cada 10 segundos
        setInterval(function() {
            location.reload();
        }, 10000); // 10000 milissegundos = 10 segundos
    </script>

</body>
</html>