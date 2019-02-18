<?php
session_start();
    
    if(!isset($_SESSION['usuario_nome']))
    {
        $_SESSION['msg'] = "Necessario fazer login!";
        header("location:index.php");
    }
    else
    {
        if(isset($_GET['img']))
        {
            $_SESSION['src_img'] = $_GET['img'];
            $alt = $_GET['img'];

        }
    } 
    
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
        <div class="login">
            <?php
                 echo "Bem vindo(a) ". $_SESSION['usuario_nome'];

            ?>
            <a href="logout.php">Sair</a>
            
        </div>


        <header class= "Cabecalho">
            <img src="viagens.jpg" alt="viagens">
        </header>

        <section class= "Chamada">
            <h1>Agende já e curta muito sua viagem</h1>
        </section>

        <main class="agendamento">
           <img src= <?php echo $_SESSION['src_img']; ?> alt="$_SESSION['src_img']">
        </main>

        <div class="especificacoes"></div>
        
            <?php

            switch($_SESSION['src_img']){
                case "casa1.jpg":
                    echo "Está casa aloja até 10 pessoas, tem 4 quartos sendo 1 suite, e 3 banheiros. Piscina e sauna. <br>";
                    break;
            
            
                case "casa2.jpg":
                    echo "Está casa magnifica aloja até 20 pessoas, tem 8 quartos, 2 suites e 5 banheiros. <br>";
                    break;

                case"casa3.jpg":
                    echo "Está casa aloja até 10 pessoas, tem 4 quartos sendo 1 suite, e 3 banheiros. Piscina e sauna.<br>";
                    break;
           
                case"casa4.jpg":
                    echo "Está casa magnifica aloja até 20 pessoas, tem 8 quartos, 2 suites e 5 banheiros.<br>";
                    break;
            }
            ?>

        <div class="datas">Escolha sua data</div>

        <?php
            $checkin = (isset($_POST['check-in']) ? $_POST['check-in'] : '');
            $checkout = (isset($_POST['check-out']) ? $_POST['check-out'] : '');
        ?>

        <form action="agendamento.php" method='POST'>

            <label for="check-in">De:</label>
            <input type="date" name ="check-in" value="<?php echo $checkin?>"/>

            <label for="check-out">Até:</label>
            <input type="date" name="check-out" value="<?php echo $checkout?>"/>

            <button type="submit">calcular</button>
        
        </form>

        <?php

            $datainicial=$_POST['check-in'];
            $datafinal=$_POST['check-out'];
            
            $diferenca= strtotime($datafinal)-strtotime($datainicial);

            $dias= floor($diferenca/(60*60*24));

            //echo "A diferença é de $dias entre as datas";
        ?>
        <div class="valores">Valor por diaria</div>

            <?php
                $valor = 150;
                $precofinal = $dias * $valor;
                $qtdpessoas ="";

                if($dias = 0){
                    echo "necessario preencher as datas";
                }
                else{
                    echo "sua estadia ficará no valor de R$" . number_format($precofinal, 2, ',', '.');
                }

            ?>
        
        
    </body>
</html>