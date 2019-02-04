<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
</head>
<body>
    <form method="POST" action="sistemas.php">
        <div>
            <label for="Usuario">Usuario:</label>
            <input type="text" name="Usuario"/>
        </div>

        <div>
            <label for="Senha">Senha:</label>
            <input type="password" name="Senha"/>
        </div>

        <div class="button">
            <button type="submit">Entrar</button>
        </div>
        <a href='logout.php'>Sair</a>

        
    </form>
    <br><a href="cadastro.php">Cadastro</a>
</body>
</html>
