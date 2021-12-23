<?php
include('../../security.php');
include('../includes/header.php'); 
include('../includes/navbar.php'); 



?>




<div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Datos de la Empresa</h4>
                           
                        </div>
                    </div>
                    
                </div>
                <!-- row -->


                <div class="row">
                    
					<div class="col-12">
                        <div class="card">
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                <?php
                                    $query = "SELECT * FROM empresa";
                                    $query_run = mysqli_query($connection, $query);
                                ?>
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                               
                                                <th>Nombre</th>
                                                <th>Descripción</th>
                                                <th>Domicilio</th>
                                                <th>Municipio</th>
                                                <th>Telefono</th>
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
                                               
                                                <td><?php  echo $row['empresa']; ?></td>
                                                <td><?php  echo $row['descripcion']; ?></td>
                                                <td><?php  echo $row['domicilio']; ?></td>
                                                <td><?php  echo $row['municipio']; ?></td>
                                                <td><?php  echo $row['telefono']; ?></td>
                                                <td>
													<div class="d-flex">
                                                    <form action="update.php" method="post">
                                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                                        <button type="submit" name="edit_btn" class="btn btn-success"> <i class="fa fa-pencil"></i></button>
                                                    </form>
                                                    
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