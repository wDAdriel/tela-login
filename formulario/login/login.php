<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela-login</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>    
    <header>        
        <h1 class="titulo">Banco de Dados</h1> 
        <a href="http://localhost/php/tela-login/formulario/home.php">voltar</a>       
    </header>
    
    
    
    <div class="tela-login>">
            <h1 class="login">LOGIN</h1>
        <form action="testeLogin.php" method="POST">       
             
             <input type="text" name="email" placeholder="E-mail">
             <br><br>
             <input type="password" name="senha" placeholder="Senha">
             <br><br>
             <input class="inputSubmit" type="submit" name="submit" value="enviar">           
        </form>
    </div>
    
    
        
    <footer>
        <p>&copy;Adriel Santana</p>
    </footer>
        
    
    
    
</body>
</html>