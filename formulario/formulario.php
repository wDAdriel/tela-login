<?php
    if(isset($_POST['submit']))
    {   
        print_r($_POST['nome']);
        print_r('<br>');
        print_r($_POST['email']);
        print_r('<br>');
        print_r($_POST['telefone']);
        print_r('<br>');
        print_r($_POST['genero']);
        print_r('<br>');
        print_r($_POST['data_nascimento']);
        print_r('<br>');
        print_r($_POST['cidade']);
        print_r('<br>');
        print_r($_POST['estado']);
        print_r('<br');
        print_r($_POST['endereco']);
        
    }
   
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario clientes</title>
    <link rel="stylesheet" href="formestilo.css">
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário de clientes</b></legend><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelinput">Nome completo</label>
                </div>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelinput">Email</label>
                </div>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelinput">Telefone</label>             
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label><br>
                <input type="radio" id="masculino" name="genero" value="feminino" required>
                <label for="masculino">Masculino</label><br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label><br><br>
                
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>                    
                
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelinput">Cidade</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="estado" id="estada" class="inputUser" required>
                    <label for="estado" class="labelinput">Estado</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereço" class="inputUser" required>
                    <label for="endereço" class="labelinput">Endereço</label>
                </div>
                <input type="submit" name="submit" id="submit">

            
            </fieldset>
        </form>

    </div>
        
    
    
    
</body>
</html>