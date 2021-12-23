<?php
include('../../security.php');
include('../includes/header.php'); 
include('../includes/navbar.php'); 



?>

<div class="content-body">
    <div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary"> Actualizar empresa </h3>
        </div>
        <div class="card-body">
        <?php

            if(isset($_POST['edit_precio']))
            {
                $id = $_POST['precio_id'];
                
                $query = "SELECT clientes.nombre, materiales.material, precios.* FROM precios
                INNER JOIN clientes   ON precios.cliente_id  = clientes.id
                INNER JOIN materiales ON precios.material_id = materiales.id WHERE precios.id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="code.php" method="POST" enctype="multipart/form-data">

                            <input type="hidden" name="precio_id" value="<?php echo $row['id'] ?>">

                            <div class="form-group">
                                <label> Cliente </label>
                                <input type="text" name="nombre" class="form-control" value="<?php echo $row['nombre'] ?>" readonly>
                            </div>
                            
                            <div class="form-group">
                                <label>Material</label>
                                <input type="text" name="material" class="form-control" value="<?php echo $row['material'] ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label> Precio  </label>
                                <input type="number" name="precio" class="form-control" value="<?php echo $row['precio'] ?>">
                            </div>

                            

                            <a href="precios.php" class="btn btn-danger"> Cancelar </a>
                            <button type="submit" name="updateprecio" class="btn btn-primary"> Actualizar </button>

                        </form>
                        <?php
                }
            }
        ?>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('../includes/scripts.php');
include('../includes/footer.php');
?>