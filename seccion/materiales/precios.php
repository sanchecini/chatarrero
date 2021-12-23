<?php
include('../../security.php');
include('../includes/header.php'); 
include('../includes/navbar.php'); 



?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar material</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

             <div class="form-group">
                <label>Nombre</label>
                        <select name="nombre">
                            <option value="0">Seleccione:</option>
                            <?php
                            $query_cliente= $connection -> query ("SELECT * FROM clientes");
                            while ($clientess = mysqli_fetch_array($query_cliente)) {
                                echo '<option value="'.$clientess['id'].'">'.$clientess['nombre'].'</option>';
                            }
                            ?>
                        </select>
            </div>   
            <div class="form-group">
                <label>Material</label>
                        <select name="material">
                            <option value="0">Seleccione:</option>
                            <?php
                            $query_material= $connection -> query ("SELECT * FROM materiales");
                            while ($valores = mysqli_fetch_array($query_material)) {
                                echo '<option value="'.$valores['id'].'">'.$valores['material'].'</option>';
                            }
                            ?>
                        </select>
            </div>        
            <div class="form-group">
                <label> Precio </label>
                <input type="text" name="precio" class="form-control" placeholder="Ingresar precio">
            </div>
           
           
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" name="registrarprecio" class="btn btn-primary">Guardar</button>
        </div>
      </form>

    </div>
  </div>
</div>




<div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Precios por cliente</h4>
                           
                        </div>
                    </div>
                    
                </div>
                <!-- row -->


                <div class="row">
                    
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                                   Agregar nuevo precio 
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <?php
                                    $query = "SELECT clientes.nombre, materiales.material, precios.* FROM precios
                                                INNER JOIN clientes   ON precios.cliente_id  = clientes.id
                                                INNER JOIN materiales ON precios.material_id = materiales.id";
                                    $query_run = mysqli_query($connection, $query);
                                ?>
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                               
                                                <th>Nombre</th>
                                                <th>Material</th>
                                                <th>Precio</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        if(mysqli_num_rows($query_run) > 0)        
                                        {
                                            while($row = mysqli_fetch_assoc($query_run))
                                            {
                                        ?>
                                            <tr>
                                               
                                                <td><?php  echo $row['nombre']; ?></td>
                                                <td><?php  echo $row['material']; ?></td>
                                                <td><?php  echo $row['precio']; ?></td>
                                                <td>
													<div class="d-flex">
                                                    <form action="updateprecios.php" method="post">
                                                        <input type="hidden" name="precio_id" value="<?php echo $row['id']; ?>">
                                                        <button type="submit" name="edit_precio" class="btn btn-success"> <i class="fa fa-pencil"></i></button>
                                                    </form>
                                                      <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarModal"><i class="fa fa-trash"></i></a>
                                                              <!--**********************************
                                                                    Modal cuachalote
                                                                ***********************************-->
                                                      
                                                                <div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                        </div>
                                                                        <div class="modal-body">¿Esta seguro que desea el precio de este cliente?</div>
                                                                        <div class="modal-footer">
                                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

                                                                        <form action="code.php" method="post">
                                                                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                                                            <button type="submit" name="deleteprecio" class="btn btn-danger"> Si </button>
                                                                        </form>


                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
													</div>												
												</td>												
                                            </tr>
                                            <?php
                                           } 
                                    }
                                    else {
                                        echo "No hay registros";
                                    }
                                    ?>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
                    
					
      

<?php
include('../includes/scripts.php');
include('../includes/footer.php');
?>