<?php
    session_start();
    //print_r($_SESSION);
    if ((!isset($_SESSION["email"]) == true) and (!isset($_SESSION['senha']) == true)) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="sistemaStyle.css">
    <link rel="stylesheet" href="midiastyle.css">
</head>
<body>
    <header>
        
    <h1>Acessou o Sistema</h1>
    <span id="burguer" class="material-symbols-outlined" onclick="clickMenu()">menu</span>
        
        <menu id="itens">
            <nav class="sair">
                <div class="dflex">
                    <a href="sair.php" class="btn" >Sair</a>
                </div>
            </nav>
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="login.php">LOGIN</a></li>
                <li><a href="#">PERFIL</a></li>
                <li><a href="#">CONFIGURAÇÕES</a></li>
            </ul>
        </menu>
    </header>

        
    

    <main>
        <section>
            <h2>Assunto</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui praesentium neque ipsa cupiditate autem est mollitia vel accusamus veritatis vitae eos fuga beatae numquam ullam, reiciendis tempore optio, doloribus dolorum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex accusamus molestiae, sapiente ratione harum earum, laboriosam officiis, sed iste neque optio hic sint similique unde quod. Provident voluptatibus dolores velit.</p>
        </section>
        <section>
            <div class="quad">
            </div>
        </section>
        
    </main>
    <script>
        function clickMenu(){
            if(itens.style.display == 'block') {
                itens.style.display = 'none'
            } else {
                itens.style.display ='block'
            }
        }

    </script>
</body>
</html>