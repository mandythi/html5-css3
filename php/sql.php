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
            $msg = "";
            $query = "SELECT Usuario, Senha FROM usuarios WHERE Usuario = '" . $log_usuario . "' AND Senha = '" . $log_senha. "'";
            $resultado = mysqli_query($conn, $query);
            
            if(mysqli_num_rows($resultado)==1)
            {   
                $_SESSION['usuario_nome'] = $log_usuario;
            }
            else
            {
                $msg = 'Usuário não logado';
            }
        }
        else{
            $msg = 'Usuario e Senha devem ser preenchidos!';
        }
        
        return $msg;
    }

    function DestroiSessao(){
        if(session_status()==1)
        {
            session_start();
        }

        session_destroy();
        unset($_SESSION);
    }

    function BuscaDados($busca_usuario,$busca_email)
    {
        include_once('conexao.php');
        $query = "SELECT Usuario, email FROM usuarios WHERE Usuario = '".$cad_usuario."' OR email = '".$cad_email."'";
        $resultado = mysqli_query($conn, $query);

        //if(){

        // }
    }

?>