<?php
include('../../security.php');
include('../includes/header.php'); 
include('../includes/navbar.php'); 



?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Nombre </label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre de cliente">
            </div>
            <div class="form-group">
                <label>Actividad</label>
                <input type="text" name="actividad" class="form-control" placeholder="Actividad o trabajo">
            </div>
            <div class="form-group">
                <label>Domicilio</label>
                <input type="text" name="domicilio" class="form-control" placeholder="Ingresar domicilio">
            </div>
            <div class="form-group">
                <label>Municipio</label>
                <input type="text" name="municipio" class="form-control" placeholder="Ingresar municipio">
            </div>

            <div class="form-group">
                <label> Telefono </label>
                <input type="number" name="telefono" class="form-control" placeholder="Ingresar telefono">
            </div>

            <div class="form-group">
                <label> Whatsapp </label>
                <input type="number" name="whatsapp" class="form-control" placeholder="Ingresar whatsapp">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registrar" class="btn btn-primary">Save</button>
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
                            <h4>Clientes</h4>
                           
                        </div>
                    </div>
                    
                </div>
                <!-- row -->


                <div class="row">
                    
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                                   Agregar nuevo cliente 
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <?php
                                    $query = "SELECT * FROM clientes";
                                    $query_run = mysqli_query($connection, $query);
                                ?>
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                               
                                                <th>Nombre</th>
                                                <th>Actividad</th>
                                                <th>Domicilio</th>
                                                <th>Municipio</th>
                                                <th>Telefono</th>
                                                <th>Whatsapp</th>
                                                <th>Fecha registro</th>
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
                                                <td><?php  echo $row['actividad']; ?></td>
                                                <td><?php  echo $row['domicilio']; ?></td>
                                                <td><?php  echo $row['municipio']; ?></td>
                                                <td><?php  echo $row['telefono']; ?></td>
                                                <td><?php  echo $row['whatsapp']; ?></td>
                                                <td><?php  echo $row['fecha']; ?></td>
                                                <td>
													<div class="d-flex">
                                                    <form action="update.php" method="post">
                                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                                        <button type="submit" name="edit_btn" class="btn btn-success"> <i class="fa fa-pencil"></i></button>
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
                                                                        <div class="modal-body">¿Esta seguro que desea el cliente?</div>
                                                                        <div class="modal-footer">
                                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

                                                                        <form action="code.php" method="post">
                                                                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                                                            <button type="submit" name="delete_btn" class="btn btn-danger"> Si </button>
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