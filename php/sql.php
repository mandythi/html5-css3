<?php
    
    

    function RealizarCadastro($cad_usuario, $cad_senha, $cad_email){
        include_once('conexao.php');
        $query ="INSERT INTO usuarios VALUE (null, '" . $cad_usuario ."', '".$cad_senha . "', '" . $cad_email ."')";
        $resultado = mysqli_query($conn, $query);

        if(mysqli_error($conn) == "")
        {
            echo "Cadastrado com sucesso";
        }
        else
        {
            echo "Não foi possivel realizar o cadastro";
        }
        
    }

    function RealizarLogin($log_usuario,$log_senha){

        if($log_usuario != '' && $log_senha !=''){

            include_once('conexao.php');

            $query = "SELECT Usuario, Senha FROM usuarios WHERE Usuario = '" . $log_usuario . "' AND Senha = '" . $log_senha. "'";
            $resultado = mysqli_query($conn, $query);
            
            if(mysqli_num_rows($resultado)==1)
            {   
                session_start();
                $_SESSION['usuario_nome']=$_POST['Usuario'];
    
            }
            else
            {
                include_once('index.php');
                echo '<div class="msgerror" style="color:red;">Usuário não logado</div>';
            }
        }
        else{
            include_once('index.php');
            echo '<div class="msgerror" style="color:red;">Usuario e Senha devem ser preenchidos!</div>';
        }
        
    }
?>