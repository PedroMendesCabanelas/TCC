<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
      body{
          font-family: Arial, Helvetica, sans-serif;
          /*background-color: rgb(88, 88, 89);*/
          background-image: url(FundoLoginCadastro.png);
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
          background-position: center;
      }
      div{
          background-color: rgba(0, 0, 0, 0.6);
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%,-50%);
          padding: 80px;
          border-radius: 15px;
          color: white;
      }
      input{
          padding: 15px;
          border: none;
          outline: none;
          font-size: 15px;
      }
      .inputSubmit{
          background-color: rgb(255, 193, 7);
          border: 15px;
          padding: 15px;
          width: 100%;
          border-radius: 10px;
          color: black;
          font-size: 15px;
      }
      .inputSubmit:hover{
          background-color: rgb(255, 211, 79);
          cursor: pointer;
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
      h1{
          color: rgb(255, 193, 7);
      }
      @media screen and (max-width: 800px){
      div{
        background-color: rgba(0, 0, 0, 0.6);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        padding: 40px;
        border-radius: 15px;
        color: white;
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
    <div>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input type="submit" name="submit" class="inputSubmit" value="Enviar">
        </form>
    </div>
</body>
</html>