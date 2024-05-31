<?php

    if(isset($_POST['submit']))
    {

      include_once('config.php');

      $nome = $_POST['nome'];
      $senha = $_POST['senha'];
      $email = $_POST['email'];
      $telefone = $_POST['telefone'];
      $genero = $_POST['genero'];
      $data_nasc = $_POST['data_nascimento'];
      $cidade = $_POST['cidade'];
      $estado = $_POST['estado'];
      $endereco = $_POST['endereco'];

      $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,genero,data_nasc,cidade,estado,endereco) 
      VALUES ('$nome','$senha','$email','$telefone','$genero','$data_nasc','$cidade','$estado','$endereco')");

      header('Location: login.php');
    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastre-se</title>
  <style>
      body{
        font-family: Arial, Helvetica, sans-serif;
        /*background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        background-color: rgb(88, 88, 89);*/
        background-image: url(FundoLoginCadastro.png);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
      }
      .box{
        color: white;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background-color: rgba(0, 0, 0, 0.6);
        padding: 15px;
        border-radius: 15px;
        /* width: 20%; */
      }
      fieldset{
        border: 3px solid rgb(255, 193, 7);
      }
      legend{
        border: 1px solid rgb(255, 193, 7);
        padding: 10px;
        text-align: center;
        background-color: rgb(255, 193, 7);
        color: black;
        border-radius: 8px;
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
        font-size: 13px;
        width: 100%;
        letter-spacing: 1px;
      }
      .labelInput{
        position: absolute;
        font-size: 13px;
        top: 0%;
        left: 0%;
        pointer-events: none;
        transition: .5s;
      }
      .inputUser:focus ~ .labelInput,
      .inputUser:valid ~ .labelInput{
        top: -11px;
        font-size: 10px;
        color: rgb(255, 211, 79);
      }
      #data_nascimento{
        border: none;
        padding: 8px;
        border-radius: 10px;
        outline: none;
        font-size: 13px;
      }
      .labelNasc{
        font-size: 13px;
      }
      .labelGenero{
        font-size: 13px;
      }
      p{
        font-size: 13px;
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
      a{
        text-decoration: none;
        background-color: rgba(0, 0, 0, 0.9);
        border: 3px solid rgb(255, 193, 7);
        padding: 15px;
        border-radius: 10px;
        color: white;
        font-size: 15px;
        position: fixed;
        top: 5%;
        left: 5%;
      }
      a:hover{
        background-color: rgb(255, 193, 7);
        color: black;
        cursor: pointer;
      }
      @media screen and (max-width: 800px){
        .box{
        color: white;
        position: absolute;
        top: 55%;
        left: 50%;
        transform: translate(-50%,-50%);
        background-color: rgba(0, 0, 0, 0.6);
        padding: 15px;
        border-radius: 15px;
        width: 50%;
      }
      a{
        text-decoration: none;
        background-color: rgba(0, 0, 0, 0.9);
        border: 3px solid rgb(255, 193, 7);
        padding: 10px;
        border-radius: 10px;
        color: white;
        font-size: 12px;
        position: fixed;
        top: 5%;
        left: 10%;
      }
      }
  </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Cadastre-se</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br>
                <div class="inputBox">
                  <input type="text" name="email" id="email" class="inputUser" required>
                  <label for="email" class="labelInput">Email</label>
                </div>
                <br>
                <div class="inputBox">
                  <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                  <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>               
                <p>Gênero:</p>
                <input type="radio" name="genero" id="feminino" value="feminino" required>
                <label for="feminino" class="labelGenero">Feminino</label>
                <br>
                <input type="radio" name="genero" id="masculino" value="masculino" required>
                <label for="masculino" class="labelGenero">Masculino</label>
                <br>
                <input type="radio" name="genero" id="outro" value="outro" required>
                <label for="outro" class="labelGenero">Outro</label>
                <br><br>
                <label for="data_nascimento" class="labelNasc"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>
                <div class="inputBox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br>
                <div class="inputBox">
                  <input type="text" name="estado" id="estado" class="inputUser" required>
                  <label for="estado" class="labelInput">Estado</label>
                </div>
                <br>
                <div class="inputBox">
                  <input type="text" name="endereco" id="endereco" class="inputUser" required>
                  <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>