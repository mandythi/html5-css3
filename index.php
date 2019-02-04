<?php

    //executa login somente quando botão logar for acionado
    if(isset($_POST['Usuario']) && isset($_POST['Senha']))
    {
        include_once('php/sql.php');
        RealizarLogin($_POST['Usuario'],$_POST['Senha']);

    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset= "utf-8" lang="pt-br">
        <!--meta name é tag para vizualização em smartphone-->
        <meta name="viewport" content="width=device-width">
        <title>Temporada - Suas férias no local perfeito</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <div class="cadastro_link"><a href="cadastro.php">Cadastre-se</a></div>
        <?php
            if(isset($_SESSION['usuario_nome']))
            {
                echo "Bem-vindo,". $_SESSION['usuario_nome'];
                echo '<a href="php/logout.php">Sair</a>';
            }
            else
            {
                echo '<div class="login">Login</div>
                    <form action="index.php" method="POST">
                        <label for="Usuario">Usuario:</label>
                        <input type="text" name="Usuario"/>
                
                        <label for="Senha">Senha:</label>
                        <input type="password" name="Senha"/>
                    
                        <button type="submit">Entrar</button>

                    </form>
                    </div>';
            }
        ?>
        
       
        <header class="Cabeçalho">
            <img src="viagens.jpg" alt="viagens">
        </header>

        <section class="Chamada">
            <h1>O melhor site de aluguel de temporada</h1>
        </section>

        <main class="Imoveis">
            <article>
                <img src="casa1.jpg" alt="casa 1">
                <h2>Conforto e beleza</h2>
                <a href="agendamento.php?img=casa1.jpg">Agende Já</a>
            </article>

            <article>
                <img src="casa2.jpg" alt="casa 2">
                <h2>Vista maravilhosa</h2>
                <a href="agendamento.php?img=casa2.jpg">Agende Já</a>
            </article>

            <article>
                <img src="casa3.jpg" alt="casa 3">
                <h2>Conforto e beleza</h2>
                <a href="agendamento.php?img=casa3.jpg">Agende Já</a>
            </article>
    
            <article>
                <img src="casa4.jpg" alt="casa 4">
                <h2>Vista maravilhosa</h2>
                <a href="agendamento.php?img=casa.jpg">Agende Já</a>
            </article>   
        </main>
    </body>
</html>
