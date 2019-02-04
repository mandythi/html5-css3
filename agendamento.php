<?php
    $src_img = $_GET["img"]
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" lang="pt-br">
        <meta name="viewport" content="width=device-width">
        <title>Sua hospedagem está á alguns segundos</title>
        <link rel="stylesheet" href="estilosagendamento.css">
    </head>
    <body>
        <header class= "Cabecalho">
                <img src="viagens.jpg" alt="viagens">
        </header>
        <section class= "Chamada">
            <h1>Agende já e curta muito sua viagem</h1>
        </section>

        <main class="agendamento">
           <img src= <?php echo $src_img; ?> alt="$src_img">
        </main>
        <div class="cadastro_link"><a href="cadastro.php">Cadastre-se</a></div>

        <div class="login">Login</div>
            <form action="index.php" method="POST">
                <label for="Usuario">Usuario:</label>
                <input type="text" name="Usuario"/>
        
                <label for="Senha">Senha:</label>
                <input type="password" name="Senha"/>
            
                <button type="submit">Entrar</button>
            </form>
        </div>
    </body>
</html>