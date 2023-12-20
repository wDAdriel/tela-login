<?php
    session_start();
    //print_r($_SESSION);
    if ((!isset($_SESSION["email"]) == true) and (!isset($_SESSION['senha']) == true)) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: logion.php');
    }
    $logado = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link rel="stylesheet" href="sistemaStyle.css">
</head>
<body>
    <header>
    <h1>Acessou o Sistema</h1>
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
</body>
</html>