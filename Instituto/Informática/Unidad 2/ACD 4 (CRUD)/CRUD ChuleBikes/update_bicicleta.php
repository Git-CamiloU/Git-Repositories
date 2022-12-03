<?php
include("db.php");
    
if (isset($_GET['idBicicleta'])) {
    $idBicicleta = $_GET['idBicicleta'];
    
    $query = "SELECT * FROM bicicleta WHERE idBicicleta= $idBicicleta";
    $resultu = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($resultu)== 1) {
        $row = mysqli_fetch_array($resultu);
        $gama = $row['gama'];
        $marca = $row['marca'];
        $color = $row['color'];
        $tipo = $row['tipo'];
        $idRCliente = $row['idRCliente'];
        $idRServicio = $row['idRServicio'];
    }

    if(isset($_POST['Actualizar'])) {
        $idBicicleta = $_GET['idBicicleta'];
        $gama = $_POST['gama'];
        $marca = $_POST['marca'];
        $color = $_POST['color'];
        $tipo = $_POST['tipo'];
        $idRCliente = $_POST['idRCliente'];
        $idRServicio = $_POST['idRServicio'];

        $query = "UPDATE bicicleta SET gama='$gama', marca='$marca', color='$color', tipo='$tipo', idRCliente='$idRCliente', idRServicio='$idRServicio' WHERE idBicicleta=$idBicicleta";
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
                <form action="update_bicicleta.php?idBicicleta=<?php echo $_GET['idBicicleta'] ?>" method='POST' >

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
                        <input type="number" name="idRCliente" value="<?php echo $idRCliente; ?>" class='form-control' 
                        placeholder='Actualizar ID cliente'>
                    </div>

                    <div class="fourm-group">
                        <input type="number" name="idRServicio" value="<?php echo $idRServicio; ?>" class='form-control' 
                        placeholder='Actualizar ID servicio'>
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