<?php
    session_start();
    //session_destroy();
    
    include_once 'php/sql.php';

    //executa login somente quando botão logar for acionado
    if(isset($_POST['Usuario']) && isset($_POST['Senha']))
    {
        $msg = RealizarLogin($_POST['Usuario'],$_POST['Senha']);
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
        <div class="login">
            
            <?php
                if(isset($_SESSION['usuario_nome']))
                {
                    //header("Location:agendamento.php");
                    echo '<div class="usuario">Bem-vindo, '. $_SESSION['usuario_nome'] . '</div>';
                    echo '<a class="logout" href="logout.php">Sair</a>';
                    
                }
                else
                {
                    echo 
                        '<div class="cadastro_link"><a href="cadastro.php">Cadastre-se</a></div>
                        <form action="index.php" method="POST">
                            <label for="Usuario">Usuario:</label>
                            <input type="text" name="Usuario"/>
                    
                            <label for="Senha">Senha:</label>
                            <input type="password" name="Senha"/>
                        
                            <button type="submit">Entrar</button>
                        </form>';
                }
            ?>
        </div>

        <div class="msgerror">
            <?php
                if(isset($msg)){
                    echo $msg;
                }
                elseif(isset ($_SESSION['msg']))
                {
                    echo $_SESSION['msg'];
                    DestroiSessao();
                }

                //DestroiSessao();
            ?>
        </div>

        <div class="Cabeçalho">
            <img src="viagens.jpg" alt="viagens">
        </div>

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
