<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME | Estacionamento</title>
  <style>
      body{
          font-family: Arial, Helvetica, sans-serif;
          /*background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));*/
          /*background-color: rgb(88, 88, 89);*/
          background-image: url(FundoHome.png);
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
          background-position: center;
          text-align: center;
          color: white;
      }
      .box{
          position: absolute;
          top: 50%;
          left: 50%;
          height: 20px;
          width: 200px;
          transform: translate(-50%,-50%);
          background-color: rgba(0, 0, 0, 0.6);
          padding: 30px;
          border-radius: 10px;
      }
      a{
          text-decoration: none;
          color: white;
          border: 3px solid rgb(255, 193, 7);
          border-radius: 10px;
          padding: 10px;
      }
      a:hover{
          background-color: rgb(255, 211, 79);
          color: black;
      }
      h1{
        color: rgb(255, 193, 7);
        font-size: 300%;
      }
      h2{
        color: white;
        font-size: 150%;
      }
      @media screen and (max-width: 800px){
      h1{
        color: rgb(255, 193, 7);
        font-size: 250%;
      }
      h2{
        font-size: 100%;
      }
    }
  </style>
</head>
  <body>
    <br><br>
    <h1>Estacionamento Inteligente</h1>
    <h2>TCC - João, Pedro, Rafael e Artur</h2>
    <div class="box">
      <a href="login.php">Login</a>
      <a href="formulario.php">Cadastre-se</a>
    </div>
  </body>
</html>