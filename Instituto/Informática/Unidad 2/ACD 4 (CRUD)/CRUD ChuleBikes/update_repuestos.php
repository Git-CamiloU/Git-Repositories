<?php
include("db.php");
    
if (isset($_GET['idRepuesto'])) {
    $idRepuesto = $_GET['idRepuesto'];
    
    $query = "SELECT * FROM repuestos WHERE idRepuesto= $idRepuesto";
    $resultu = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($resultu)== 1) {
        $row = mysqli_fetch_array($resultu);
        $nombre = $row['nombre'];
        $gama = $row['gama'];
        $marca = $row['marca'];
        $color = $row['color'];
        $tipo = $row['tipo'];
        $estado = $row['estado'];
        $precio = $row['precio'];
        $idRProveedor1 = $row['idRProveedor1'];
    }

    if(isset($_POST['Actualizar'])) {
        $idRepuesto = $_GET['idRepuesto'];
        $nombre = $_POST['nombre'];
        $gama = $_POST['gama'];
        $marca = $_POST['marca'];
        $color = $_POST['color'];
        $tipo = $_POST['tipo'];
        $estado = $_POST['estado'];
        $precio = $_POST['precio'];
        $idRProveedor1 = $_POST['idRProveedor1'];

        $query = "UPDATE repuestos SET nombre='$nombre', gama='$gama', marca='$marca', color='$color', tipo='$tipo', estado='$estado', precio='$precio', idRProveedor1='$idRProveedor1' WHERE idRepuesto=$idRepuesto";
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
                <form action="update_repuestos.php?idRepuesto=<?php echo $_GET['idRepuesto'] ?>" method='POST' >
                    
                    <div class="fourm-group">
                        <input type="text" name="nombre" value="<?php echo $nombre; ?>" class='form-control' 
                        placeholder='Actualizar nombre'>
                    </div>

                    <div class="fourm-group">
                        <input type="text" name="gama" value="<?php echo $gama; ?>" class='form-control' 
                        placeholder='Actualizar gama'>
                    </div>
                    
                    <div class="fourm-group">
                        <input type="text" name="marca" value="<?php echo $marca; ?>" class='form-control' 
                        placeholder='Actualizar marca'>
                    </div>

                    <div class="fourm-group">
                        <input type="text" name="color" value="<?php echo $color; ?>" class='form-control' 
                        placeholder='Actualizar color'>
                    </div>

                    <div class="fourm-group">
                        <input type="text" name="tipo" value="<?php echo $tipo; ?>" class='form-control' 
                        placeholder='Actualizar tipo'>
                    </div>

                    <div class="fourm-group">
                        <input type="text" name="estado" value="<?php echo $estado; ?>" class='form-control' 
                        placeholder='Actualizar estado'>
                    </div>

                    <div class="fourm-group">
                        <input type="number" name="precio" value="<?php echo $precio; ?>" class='form-control' 
                        placeholder='Actualizar precio'>
                    </div>

                    <div class="fourm-group">
                        <input type="number" name="idRProveedor1" value="<?php echo $idRProveedor1; ?>" class='form-control' 
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