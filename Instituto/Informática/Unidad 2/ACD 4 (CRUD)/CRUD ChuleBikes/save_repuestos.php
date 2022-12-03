<?php
include('db.php');

if (isset($_POST['save_repuestos'])){
    $nombre = $_POST['nombre'];
    $gama = $_POST['gama'];
    $marca = $_POST['marca'];
    $color = $_POST['color'];
    $tipo = $_POST['tipo'];
    $estado = $_POST['estado'];
    $precio = $_POST['precio'];
    $idRProveedor1 = $_POST['idRProveedor1'];

    $query = "INSERT INTO repuestos(nombre, gama, marca, color, tipo, estado, precio, idRProveedor1) VALUES('$nombre', '$gama', '$marca', '$color', '$tipo', '$estado', '$precio', '$idRProveedor1')";
    
    $result = mysqli_query($conn, $query);
    if(!$result){
        die('Consulta fallida');
    }
    
    $_SESSION['message'] = 'Información almacenada con éxito';
    $_SESSION['message_type'] = 'success';
    header('location: index.php');
    
}
?>