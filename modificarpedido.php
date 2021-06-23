<?php
    session_start();
    include_once 'data_base/database.php';
    
        $sql= "UPDATE `pedido` SET Nombre='%s', Apellido='%s',Telefono='%s',Correo='%s',Region='%s',Ciudad='%s',Comuna='%s' WHERE cod_pedido=%s";
        $sql= sprintf($sql,$_POST['Nombre'],$_POST['Apellido'],$_POST['Telefono'],$_POST['Correo'],$_POST['Region'],$_POST['Ciudad'],$_POST['Comuna'],$_POST['id']);
        $result = $conn->query($sql);
        header('Location:pedidos.php');
    
?>

