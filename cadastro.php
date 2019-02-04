<?php
    if (isset($_POST['Usuario']))
    {
        include_once('php/sql.php');
        RealizarCadastro($_POST['Usuario'],$_POST['Senha'],$_POST['Email']);

    }
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Cadastre-se</title>
</head>
<body>
    <form method="POST" action="cadastro.php">
        <div>
            <label for="Usuario">Usuario:</label>
            <input type="text" name="Usuario"/>
        </div>

        <div>
            <label for="Senha">Senha:</label>
            <input type="password" name="Senha"/>
        </div>

        <div>
            <label for="Email">Email:</label>
            <input type="text" name="Email"/>
        </div>

        <div class="button">
            <button type="submit">Cadastrar</button>
        </div>
    </form>
    <?php
        die();
    ?>
   
</body>
</html>
