<?php
include('db.php');

if (isset($_POST['save_servicio'])){
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $idRHerramienta = $_POST['idRHerramienta'];
    $idFRepuesto = $_POST['idFRepuesto'];

    $query = "INSERT INTO servicio(nombre, precio, idRHerramienta, idFRepuesto) VALUES('$nombre', '$precio', '$idRHerramienta', '$idFRepuesto')";
    
    $result = mysqli_query($conn, $query);
    if(!$result){
        die('Consulta fallida');
    }
    
    $_SESSION['message'] = 'Información almacenada con éxito';
    $_SESSION['message_type'] = 'success';
    header('location: index.php');
    
}
?>