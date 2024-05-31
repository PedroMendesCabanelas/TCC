<?php

    session_start();

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if($email == 'adm@gmail.com' && $senha == 'adm123')
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: adm.php');
        }
        else
        {
            $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

            $result = $conexao -> query($sql);

            if(mysqli_num_rows($result) < 1)
            {
                // Não Existe
                unset($_SESSION['email']);
                unset($_SESSION['senha']);
                header('Location: login.php');
            }
            else
            {
                // Existe
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;
                header('Location: sistema.php');
            }
        }
    }
    else
    {
        // Não acessa
        header('Location: login.php');
    }

?>