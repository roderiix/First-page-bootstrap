<?php
include_once 'data_base/database.php';
   $sql = 'DELETE from pedido where cod_pedido=%s';
   $sql= sprintf($sql,$_GET['id']);
   $result = $conn->query($sql);
   header('Location:pedidos.php');
?> 