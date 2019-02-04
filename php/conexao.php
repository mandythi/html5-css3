<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "estudophp";
	
	
	//criar conexão
    $conn = mysqli_connect($servidor, $usuario, $senha,$dbname);
    
    if (!$conn)
    {
        die("falha de conexão com o banco de dados: " . mysqli_connect_error());
        exit();
    }
       
?>