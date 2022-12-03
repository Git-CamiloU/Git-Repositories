<?php
include("db.php");
    
if (isset($_GET['idServicio'])) {
    $idServicio = $_GET['idServicio'];
    
    $query = "SELECT * FROM servicio WHERE idServicio= $idServicio";
    $resultu = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($resultu)== 1) {
        $row = mysqli_fetch_array($resultu);
        $nombre = $row['nombre'];
        $precio = $row['precio'];
        $idRHerramienta = $row['idRHerramienta'];
        $idFRepuesto = $row['idFRepuesto'];
    }

    if(isset($_POST['Actualizar'])) {
        $idServicio = $_GET['idServicio'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $idRHerramienta = $_POST['idRHerramienta'];
        $idFRepuesto = $_POST['idFRepuesto'];

        $query = "UPDATE servicio SET nombre='$nombre', precio='$precio', idRHerramienta='$idRHerramienta', idFRepuesto='$idFRepuesto' WHERE idServicio=$idServicio";
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
                <form action="update_servicio.php?idServicio=<?php echo $_GET['idServicio'] ?>" method='POST' >

                    <div class="fourm-group">
                        <input type="text" name="nombre" value="<?php echo $nombre; ?>" class='form-control' 
                        placeholder='Actualizar nombre'>
                    </div>
                    
                    <div class="fourm-group">
                        <input type="number" name="precio" value="<?php echo $precio; ?>" class='form-control' 
                        placeholder='Actualizar precio'>
                    </div>

                    <div class="fourm-group">
                        <input type="number" name="idRHerramienta" value="<?php echo $idRHerramienta; ?>" class='form-control' 
                        placeholder='Actualizar ID herramienta'>
                    </div>

                    <div class="fourm-group">
                        <input type="number" name="idFRepuesto" value="<?php echo $idFRepuesto; ?>" class='form-control' 
                        placeholder='Actualizar ID repuesto'>
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