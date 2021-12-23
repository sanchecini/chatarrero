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

            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM empresa WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="code.php" method="POST" enctype="multipart/form-data">

                            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

                            <div class="form-group">
                                <label> Nombre </label>
                                <input type="text" name="empresa" class="form-control" value="<?php echo $row['empresa'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Descripcion</label>
                                <input type="text" name="descripcion" class="form-control" value="<?php echo $row['descripcion'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Domicilio</label>
                                <input type="text" name="domicilio" class="form-control" value="<?php echo $row['domicilio'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Municipio</label>
                                <input type="text" name="municipio" class="form-control" value="<?php echo $row['municipio'] ?>">
                            </div>

                            <div class="form-group">
                                <label> Telefono </label>
                                <input type="number" name="telefono" class="form-control" value="<?php echo $row['telefono'] ?>">
                            </div>

                            

                            <a href="index.php" class="btn btn-danger"> Cancelar </a>
                            <button type="submit" name="updatebtn" class="btn btn-primary"> Actualizar </button>

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