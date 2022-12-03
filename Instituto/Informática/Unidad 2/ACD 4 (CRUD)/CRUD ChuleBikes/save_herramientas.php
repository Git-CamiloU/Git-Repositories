<?php
include('db.php');

if (isset($_POST['save_herramientas'])){
    $nombre = $_POST['nombre'];
    $durabilidad = $_POST['durabilidad'];
    $idRProveedor = $_POST['idRProveedor'];

    $query = "INSERT INTO herramientas(nombre, durabilidad, idRProveedor) VALUES('$nombre', '$durabilidad', '$idRProveedor')";
    
    $result = mysqli_query($conn, $query);
    if(!$result){
        die('Consulta fallida');
    }

    $_SESSION['message'] = 'Información almacenada con éxito';
    $_SESSION['message_type'] = 'success';
    header('location: index.php');

}
?>