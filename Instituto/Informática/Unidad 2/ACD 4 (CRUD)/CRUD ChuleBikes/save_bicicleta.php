<?php
include("db.php");

if (isset($_POST['save_bicicleta'])) {
    $gama = $_POST['gama'];
    $marca = $_POST['marca'];
    $color = $_POST['color'];
    $tipo = $_POST['tipo'];
    $idRCliente = $_POST['idRCliente'];
    $idRServicio = $_POST['idRServicio'];

    $query= "INSERT INTO bicicleta(gama, marca, color, tipo, idRCliente, idRServicio) VALUES('$gama', '$marca', '$color', '$tipo', '$idRCliente', '$idRServicio')";
    $resultc = mysqli_query($conn, $query);
    
    if(!$resultc) {
        die('Consulta fallida');
    }

    $_SESSION['message'] = 'Almacenado exitosamente';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');

}
?>