<?php
include("db.php");
    
if (isset($_GET['idCliente'])) {
    $idCliente = $_GET['idCliente'];
    
    $query = "SELECT * FROM cliente WHERE idCliente= $idCliente";
    $resultu = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($resultu)== 1) {
        $row = mysqli_fetch_array($resultu);
        $cédula = $row['cédula'];
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $numContacto = $row['numContacto'];
        $correo = $row['correo'];
    }

    if(isset($_POST['Actualizar'])) {
        $idCliente = $_GET['idCliente'];
        $cédula = $_POST['cédula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $numContacto = $_POST['numContacto'];
        $correo = $_POST['correo'];

        $query = "UPDATE cliente SET cédula='$cédula', nombre='$nombre', apellido='$apellido', numContacto='$numContacto', correo='$correo' WHERE idCliente=$idCliente";
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
                <form action="update_cliente.php?idCliente=<?php echo $_GET['idCliente'] ?>" method='POST' >

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