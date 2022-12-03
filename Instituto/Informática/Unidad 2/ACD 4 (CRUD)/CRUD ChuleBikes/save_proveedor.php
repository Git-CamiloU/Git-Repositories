<?php
include('db.php');

if (isset($_POST['save_proveedor'])){
    $tipo = $_POST['tipo'];
    $cédula = $_POST['cédula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $numContacto = $_POST['numContacto'];
    $correo = $_POST['correo'];

    $query = "INSERT INTO proveedor(tipo, cédula, nombre, apellido, numContacto, correo) VALUES('$tipo', '$cédula', '$nombre', '$apellido', '$numContacto', '$correo')";
    
    $result = mysqli_query($conn, $query);
    if(!$result){
        die('Consulta fallida');
    }
    
    $_SESSION['message'] = 'Información almacenada con éxito';
    $_SESSION['message_type'] = 'success';
    header('location: index.php');

}
?>