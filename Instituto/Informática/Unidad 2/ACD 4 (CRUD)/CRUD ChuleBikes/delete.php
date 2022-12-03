<?php
include("db.php");

if (isset($_GET['idBicicleta'])) {
    $idBicicleta= $_GET['idBicicleta'];

    $query= "DELETE FROM bicicleta WHERE idBicicleta= $idBicicleta";
    $resultd = mysqli_query($conn, $query);

    if(!$resultd) {
        die('Consulta fallida');
    }

    $_SESSION['message'] = 'Eliminado exitosamente';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
}
?>

<?php
include("db.php");

if (isset($_GET['idCliente'])) {
    $idCliente= $_GET['idCliente'];

    $query= "DELETE FROM cliente WHERE idCliente= $idCliente";
    $resultd = mysqli_query($conn, $query);

    if(!$resultd) {
        die('Consulta fallida');
    }

    $_SESSION['message'] = 'Eliminado exitosamente';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
}
?>

<?php
include("db.php");

if (isset($_GET['idHerramienta'])) {
    $idHerramienta= $_GET['idHerramienta'];

    $query= "DELETE FROM herramientas WHERE idHerramienta= $idHerramienta";
    $resultd = mysqli_query($conn, $query);

    if(!$resultd) {
        die('Consulta fallida');
    }

    $_SESSION['message'] = 'Eliminado exitosamente';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
}
?>

<?php
include("db.php");

if (isset($_GET['idProveedor'])) {
    $idProveedor= $_GET['idProveedor'];

    $query= "DELETE FROM proveedor WHERE idProveedor= $idProveedor";
    $resultd = mysqli_query($conn, $query);

    if(!$resultd) {
        die('Consulta fallida');
    }

    $_SESSION['message'] = 'Eliminado exitosamente';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
}
?>

<?php
include("db.php");

if (isset($_GET['idRepuesto'])) {
    $idRepuesto= $_GET['idRepuesto'];

    $query= "DELETE FROM repuestos WHERE idRepuesto= $idRepuesto";
    $resultd = mysqli_query($conn, $query);

    if(!$resultd) {
        die('Consulta fallida');
    }

    $_SESSION['message'] = 'Eliminado exitosamente';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
}
?>

<?php
include("db.php");

if (isset($_GET['idServicio'])) {
    $idServicio= $_GET['idServicio'];

    $query= "DELETE FROM servicio WHERE idServicio= $idServicio";
    $resultd = mysqli_query($conn, $query);

    if(!$resultd) {
        die('Consulta fallida');
    }

    $_SESSION['message'] = 'Eliminado exitosamente';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
}
?>