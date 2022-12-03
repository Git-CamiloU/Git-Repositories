<?php include("db.php"); ?>
<?php include("includes/header.php"); ?>
<main class="container p-4">
<br>
    <pre><h3>Insertar en Bicicleta</h3></pre>
    <div class='container p-1'>
        <div class='row'>
            <div class='col-md-4'>

            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            <?php session_unset(); } ?>

                <div class="card card-body">
                    <form action="save_bicicleta.php" method='POST'>

                        <div class="form-group">
                            <input type="text" name='gama' class='form-control'
                            placeholder='Gama' autofocus>
                        </div>

                        <div class="form-group">
                            <input type="text" name='marca' class='form-control'
                            placeholder='Marca' autofocus>
                        </div>

                        <div class="form-group">
                            <input type="text" name='color' class='form-control'
                            placeholder='Color' autofocus>
                        </div>

                        <div class="form-group">
                            <input type="text" name='tipo' class='form-control'
                            placeholder='Tipo' autofocus>
                        </div>

                        <div class="form-group">
                            <input type="number" name='idRCliente' class='form-control'
                            placeholder='ID cliente' autofocus>
                        </div>

                        <div class="form-group">
                            <input type="number" name='idRServicio' class='form-control'
                            placeholder='ID servicio' autofocus>
                        </div>

                        <input type="submit" class='btn btn-success btn-block' name='save_bicicleta' value='Guardar'>
                    </form>
                </div>
            </div>

            <div class="col-md-8">
         
            <table class='table table-bordered'>
                <thead>
                        <tr>
                            <th>Gama</th>
                            <th>Marca</th>
                            <th>Color</th>
                            <th>Tipo</th>
                            <th>ID_Cliente</th>
                            <th>ID_Servicio</th>
                            <th>Acciones</th>
                        </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM bicicleta";
                    $result_datosb = mysqli_query($conn, $query);
                    while($row= mysqli_fetch_assoc($result_datosb)) { ?>
                        <tr>
                            <td> <?php echo $row['gama']; ?> </td>
                            <td> <?php echo $row['marca']; ?> </td>
                            <td> <?php echo $row['color']; ?> </td>
                            <td> <?php echo $row['tipo']; ?> </td>
                            <td> <?php echo $row['idRCliente']; ?> </td>
                            <td> <?php echo $row['idRServicio']; ?> </td>
                            <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="update_bicicleta.php?idBicicleta=<?php echo $row['idBicicleta']?>" class='btn btn-secondary btn-sm'>
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                <a href="delete.php?idBicicleta=<?php echo $row['idBicicleta']?>" class='btn btn-danger btn-sm'>
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            </div>
        
        </div>
    </div>
</main>
<?php include("includes/footer.php"); ?>
<br><br>





<main class="container p-4">
<br>
    <pre><h3>Insertar en Cliente</h3></pre>
    <div class='container p-1'>
        <div class='row'>
            <div class='col-md-4'>

            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            <?php session_unset(); } ?>

                <div class="card card-body">
                    <form action="save_cliente.php" method='POST'>

                    <div class="form-group">
                        <input type="number" name='cédula' class='form-control'
                        placeholder='Cédula' autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" name='nombre' class='form-control'
                        placeholder='Nombre' autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" name='apellido' class='form-control'
                        placeholder='Apellido' autofocus>
                    </div>

                    <div class="form-group">
                        <input type="number" name='numContacto' class='form-control'
                        placeholder='Número de contacto' autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" type='number' name='correo' class='form-control'
                        placeholder='Correo' autofocus>
                    </div>

                        <input type="submit" class='btn btn-success btn-block' name='save_cliente' value='Guardar'>
                    </form>
                </div>
            </div>

            <div class="col-md-8">
         
            <table class='table table-bordered'>
                <thead>
                        <tr>
                            <th>Cédula</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Número_contacto</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM cliente";
                    $result_datosc = mysqli_query($conn, $query);
                    while($row= mysqli_fetch_assoc($result_datosc)) { ?>
                        <tr>
                            <td> <?php echo $row['cédula']; ?> </td>
                            <td> <?php echo $row['nombre']; ?> </td>
                            <td> <?php echo $row['apellido']; ?> </td>
                            <td> <?php echo $row['numContacto']; ?> </td>
                            <td> <?php echo $row['correo']; ?> </td>
                            <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="update_cliente.php?idCliente=<?php echo $row['idCliente']?>" class='btn btn-secondary btn-sm'>
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                <a href="delete.php?idCliente=<?php echo $row['idCliente']?>" class='btn btn-danger btn-sm'>
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            </div>
        
        </div>
    </div>
</main>
<?php include("includes/footer.php"); ?>
<br><br>





<main class="container p-4">
<br>
    <pre><h3>Insertar en Herramientas</h3></pre>
    <div class='container p-1'>
        <div class='row'>
            <div class='col-md-4'>

            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            <?php session_unset(); } ?>

            <div class="card card-body">
                <form action="save_herramientas.php" method='POST'>

                    <div class="form-group">
                        <input type="text" name='nombre' class='form-control'
                        placeholder='Nombre' autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" name='durabilidad' class='form-control'
                        placeholder='Durabilidad' autofocus>
                    </div>

                    <div class="form-group">
                        <input type="number" name='idRProveedor' class='form-control'
                        placeholder='ID proveedor' autofocus>
                    </div>

                    <input type="submit" class='btn btn-success btn-block' name='save_herramientas' value='Guardar'>
                </form>
            </div>
        </div>
        
        <div class="col-md-8">
         
            <table class='table table-bordered'>
                <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Durabilidad</th>
                            <th>ID_proveedor</th>
                            <th>Acciones</th>
                        </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM herramientas";
                    $result_datosh = mysqli_query($conn, $query);
                    while($row= mysqli_fetch_assoc($result_datosh)) { ?>
                        <tr>
                            <td> <?php echo $row['nombre']; ?> </td>
                            <td> <?php echo $row['durabilidad']; ?> </td>
                            <td> <?php echo $row['idRProveedor']; ?> </td>
                            <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="update_herramientas.php?idHerramienta=<?php echo $row['idHerramienta']?>" class='btn btn-secondary btn-sm'>
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                <a href="delete.php?idHerramienta=<?php echo $row['idHerramienta']?>" class='btn btn-danger btn-sm'>
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            </div>
        
        </div>
    </div>
</main>
<?php include("includes/footer.php"); ?>
<br><br>





<main class="container p-4">
<br>
    <pre><h3>Insertar en Proveedor</h3></pre>
    <div class='container p-1'>
        <div class='row'>
            <div class='col-md-4'>

            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            <?php session_unset(); } ?>

            <div class="card card-body">
                <form action="save_proveedor.php" method='POST'>

                    <div class="form-group">
                        <input type="text" name='tipo' class='form-control'
                        placeholder='Tipo' autofocus>
                    </div>

                    <div class="form-group">
                        <input type="number" name='cédula' class='form-control'
                        placeholder='Cédula' autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" name='nombre' class='form-control'
                        placeholder='Nombre' autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" name='apellido' class='form-control'
                        placeholder='Apellido' autofocus>
                    </div>

                    <div class="form-group">
                        <input type="number" name='numContacto' class='form-control'
                        placeholder='Número de contacto' autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" type='number' name='correo' class='form-control'
                        placeholder='Correo' autofocus>
                    </div>

                    <input type="submit" class='btn btn-success btn-block' name='save_proveedor' value='Guardar'>
                </form>
            </div>
        </div>

        <div class="col-md-8">
         
            <table class='table table-bordered'>
                <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Cédula</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Num_contacto</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM proveedor";
                    $result_datosp = mysqli_query($conn, $query);
                    while($row= mysqli_fetch_assoc($result_datosp)) { ?>
                        <tr>
                            <td> <?php echo $row['tipo']; ?> </td>
                            <td> <?php echo $row['cédula']; ?> </td>
                            <td> <?php echo $row['nombre']; ?> </td>
                            <td> <?php echo $row['apellido']; ?> </td>
                            <td> <?php echo $row['numContacto']; ?> </td>
                            <td> <?php echo $row['correo']; ?> </td>
                            <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="update_proveedor.php?idProveedor=<?php echo $row['idProveedor']?>" class='btn btn-secondary btn-sm'>
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                <a href="delete.php?idProveedor=<?php echo $row['idProveedor']?>" class='btn btn-danger btn-sm'>
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            </div>
        
        </div>
    </div>
</main>
<?php include("includes/footer.php"); ?>
<br><br>





<main class="container p-4">
<br>
    <pre><h3>Insertar en Repuestos</h3></pre>
    <div class='container p-1'>
        <div class='row'>
            <div class='col-md-4'>

            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            <?php session_unset(); } ?>

            <div class="card card-body">
                <form action="save_repuestos.php" method='POST'>

                    <div class="form-group">
                        <input type="text" name='nombre' class='form-control'
                        placeholder='Nombre' autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" name='gama' class='form-control'
                        placeholder='Gama' autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" name='marca' class='form-control'
                        placeholder='Marca' autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" name='color' class='form-control'
                        placeholder='Color' autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" name='tipo' class='form-control'
                        placeholder='Tipo' autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" name='estado' class='form-control'
                        placeholder='Estado' autofocus>
                    </div>

                    <div class="form-group">
                        <input type="number" name='precio' class='form-control'
                        placeholder='Precio' autofocus>
                    </div>

                    <div class="form-group">
                        <input type="number" name='idRProveedor1' class='form-control'
                        placeholder='ID proveedor' autofocus>
                    </div>

                    <input type="submit" class='btn btn-success btn-block' name='save_repuestos' value='Guardar'>
                </form>
            </div>
        </div>

        <div class="col-md-8">
         
            <table class='table table-bordered'>
                <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Gama</th>
                            <th>Marca</th>
                            <th>Color</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                            <th>Precio</th>
                            <th>ID_Proveedor</th>
                            <th>Acciones</th>
                        </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM repuestos";
                    $result_datosr = mysqli_query($conn, $query);
                    while($row= mysqli_fetch_assoc($result_datosr)) { ?>
                        <tr>
                            <td> <?php echo $row['nombre']; ?> </td>
                            <td> <?php echo $row['gama']; ?> </td>
                            <td> <?php echo $row['marca']; ?> </td>
                            <td> <?php echo $row['color']; ?> </td>
                            <td> <?php echo $row['tipo']; ?> </td>
                            <td> <?php echo $row['estado']; ?> </td>
                            <td> <?php echo $row['precio']; ?> </td>
                            <td> <?php echo $row['idRProveedor1']; ?> </td>
                            <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="update_repuestos.php?idRepuesto=<?php echo $row['idRepuesto']?>" class='btn btn-secondary btn-sm'>
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                <a href="delete.php?idRepuesto=<?php echo $row['idRepuesto']?>" class='btn btn-danger btn-sm'>
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            </div>
        
        </div>
    </div>
</main>
<?php include("includes/footer.php"); ?>
<br><br>





<main class="container p-4">
<br>
    <pre><h3>Insertar en Servicio</h3></pre>
    <div class='container p-1'>
        <div class='row'>
            <div class='col-md-4'>

            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            <?php session_unset(); } ?>

            <div class="card card-body">
                <form action="save_servicio.php" method='POST'>

                    <div class="form-group">
                        <input type="text" name='nombre' class='form-control'
                        placeholder='Nombre' autofocus>
                    </div>

                    <div class="form-group">
                        <input type="number" name='precio' class='form-control'
                        placeholder='Precio' autofocus>
                    </div>

                    <div class="form-group">
                        <input type="number" name='idRHerramienta' class='form-control'
                        placeholder='ID herramienta' autofocus>
                    </div>

                    <div class="form-group">
                        <input type="number" name='idFRepuesto' class='form-control'
                        placeholder='ID repuesto' autofocus>
                    </div>

                    <input type="submit" class='btn btn-success btn-block' name='save_servicio' value='Guardar'>
                </form>
            </div>
        </div>

        <div class="col-md-8">
         
            <table class='table table-bordered'>
                <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>ID_Herramienta</th>
                            <th>ID_Repuesto</th>
                            <th>Acciones</th>
                        </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM servicio";
                    $result_datoss = mysqli_query($conn, $query);
                    while($row= mysqli_fetch_assoc($result_datoss)) { ?>
                        <tr>
                            <td> <?php echo $row['nombre']; ?> </td>
                            <td> <?php echo $row['precio']; ?> </td>
                            <td> <?php echo $row['idRHerramienta']; ?> </td>
                            <td> <?php echo $row['idFRepuesto']; ?> </td>
                            <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="update_servicio.php?idServicio=<?php echo $row['idServicio']?>" class='btn btn-secondary btn-sm'>
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                <a href="delete.php?idServicio=<?php echo $row['idServicio']?>" class='btn btn-danger btn-sm'>
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            </div>
        
        </div>
    </div>
</main>
<?php include("includes/footer.php"); ?>
<br><br>