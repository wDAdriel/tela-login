<?php
    //print_r($_REQUEST)
    
    if(isset($_POST['sumit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        include_once('config.php');
        
        $senha = $_POST['email'];
        $email = $_POST['senha'];

        print_r('Email' . $email);
        print_r('Senha' . $senha);

    }
    else{
        header('Location: login.php');
    }
?>