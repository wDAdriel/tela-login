<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="midiaquery.css">
</head>
<body>
    <main>
        <section id="login">
            <div id="imagem">
                
            </div>
            <div id="formulario">                                
                <h1>Entrar</h1> 
                <form action="sistema.php" method="POST"></form>
                    <div class="campo">
                        <span class="material-symbols-outlined">Login</span>
                        <input type="email" name="login" id="login" placeholder="E-mail">
                        <label for="login">Login</label>
                    </div>
                    <div class="campo">
                        <span class="material-symbols-outlined">Passkey</span>
                        <input type="password" name="senha" id="senha" placeholder="Senha">
                        <label for="senha" id="senha">Senha</label>
                        
                        <input type="submit" value="Entar" id="submit">

                    </div>
                    
               

            </div>
            
            
        </section>
    </main>
</body>
</html>