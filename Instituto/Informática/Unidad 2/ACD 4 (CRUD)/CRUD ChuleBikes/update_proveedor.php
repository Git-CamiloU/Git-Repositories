<?php
include("db.php");
    
if (isset($_GET['idProveedor'])) {
    $idProveedor = $_GET['idProveedor'];
    
    $query = "SELECT * FROM proveedor WHERE idProveedor= $idProveedor";
    $resultu = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($resultu)== 1) {
        $row = mysqli_fetch_array($resultu);
        $tipo = $row['tipo'];
        $cédula = $row['cédula'];
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $numContacto = $row['numContacto'];
        $correo = $row['correo'];
    }

    if(isset($_POST['Actualizar'])) {
        $idProveedor = $_GET['idProveedor'];
        $tipo = $_POST['tipo'];
        $cédula = $_POST['cédula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $numContacto = $_POST['numContacto'];
        $correo = $_POST['correo'];

        $query = "UPDATE proveedor SET tipo='$tipo', cédula='$cédula', nombre='$nombre', apellido='$apellido', numContacto='$numContacto', correo='$correo' WHERE idProveedor=$idProveedor";
        mysqli_query($conn, $query);

        $_SESSION['message'] = 'Datos actualizados exitosamente';
        $_SESSION['message_type'] = 'success';
        header("Location: index.php");
    }

}
?>

<?php include("includes/header.php"); ?>

<div class= 'container p-4'>
    <div class= 'row'>
        <div class= 'col-md-4 mx-auto'>
            <div class="card card-body">
                <form action="update_proveedor.php?idProveedor=<?php echo $_GET['idProveedor'] ?>" method='POST' >

                    <div class="fourm-group">
                        <input type="text" name="tipo" value="<?php echo $tipo; ?>" class='form-control' 
                        placeholder='Actualizar tipo'>
                    </div>
                    
                    <div class="fourm-group">
                        <input type="number" name="cédula" value="<?php echo $cédula; ?>" class='form-control' 
                        placeholder='Actualizar cédula'>
                    </div>

                    <div class="fourm-group">
                        <input type="text" name="nombre" value="<?php echo $nombre; ?>" class='form-control' 
                        placeholder='Actualizar nombre'>
                    </div>

                    <div class="fourm-group">
                        <input type="text" name="apellido" value="<?php echo $apellido; ?>" class='form-control' 
                        placeholder='Actualizar apellido'>
                    </div>

                    <div class="fourm-group">
                        <input type="number" name="numContacto" value="<?php echo $numContacto; ?>" class='form-control' 
                        placeholder='Actualizar número_contacto'>
                    </div>

                    <div class="fourm-group">
                        <input type="text" type="number" name="correo" value="<?php echo $correo; ?>" class='form-control' 
                        placeholder='Actualizar correo'>
                    </div>

                    <button class='btn btn-success' name='Actualizar'>
                        Actualizar
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>