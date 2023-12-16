<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <div class="box">
        <form action="">
            <fieldset>
                <legend><b>Formulário de clientes</b></legend><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome">Nome completo</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email">Email</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone">Telefone</label>             
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <input type="radio" id="masculino" name="genero" value="feminino" required>
                <label for="masculino">Masculino</label>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <div class="inputBox">
                    <label for="data_nascimento"><b>Data de Nascimento</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" required>
                    
                </div>

            
            </fieldset>
        </form>

    </div>
        
    
    
    
</body>
</html>