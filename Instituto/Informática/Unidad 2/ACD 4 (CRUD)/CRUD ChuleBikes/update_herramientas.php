<?php
include("db.php");
    
if (isset($_GET['idHerramienta'])) {
    $idHerramienta = $_GET['idHerramienta'];
    
    $query = "SELECT * FROM herramientas WHERE idHerramienta= $idHerramienta";
    $resultu = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($resultu)== 1) {
        $row = mysqli_fetch_array($resultu);
        $nombre = $row['nombre'];
        $durabilidad = $row['durabilidad'];
        $idRProveedor = $row['idRProveedor'];

    }

    if(isset($_POST['Actualizar'])) {
        $idHerramienta = $_GET['idHerramienta'];
        $nombre = $_POST['nombre'];
        $durabilidad = $_POST['durabilidad'];
        $idRProveedor = $_POST['idRProveedor'];

        $query = "UPDATE herramientas SET nombre='$nombre', durabilidad='$durabilidad', idRProveedor='$idRProveedor' WHERE idHerramienta=$idHerramienta";
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
                <form action="update_herramientas.php?idHerramienta=<?php echo $_GET['idHerramienta'] ?>" method='POST' >

                    <div class="fourm-group">
                        <input type="text" name="nombre" value="<?php echo $nombre; ?>" class='form-control' 
                        placeholder='Actualizar nombre'>
                    </div>
                    
                    <div class="fourm-group">
                        <input type="text" name="durabilidad" value="<?php echo $durabilidad; ?>" class='form-control' 
                        placeholder='Actualizar durabilidad'>
                    </div>

                    <div class="fourm-group">
                        <input type="number" name="idRProveedor" value="<?php echo $idRProveedor; ?>" class='form-control' 
                        placeholder='Actualizar ID proveedor'>
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