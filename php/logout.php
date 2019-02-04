<?php

    unset($_SESSION['usuario_nome']);
    session_destroy();
    
    header ("Location: ../index.php");

?>