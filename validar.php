<?php
    session_start();
    if($_POST['usuario']=='user' && $_POST['contraseña']=='admin'){
        $_SESSION['admin']=true;
        header('Location:pedidos.php');
    }
    else{
        header('Location:index.php');
    }
?>