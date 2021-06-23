<?php
    session_start();
    include_once 'data_base/database.php';
    if(isset($_POST['name'])){
        $sql= "INSERT INTO `pedido`(`Nombre`, `Apellido`, `Telefono`, `Correo`, `Region`, `Ciudad`, `Comuna`) VALUES ('%s','%s','%s','%s','%s','%s','%s')";
        $sql= sprintf($sql,$_POST['name'],$_POST['apellido'],$_POST['numero'],$_POST['email'],$_POST['region'],$_POST['ciudad'],$_POST['comuna']);
        $result = $conn->query($sql);
        header('Location:index.php');
    }
?>