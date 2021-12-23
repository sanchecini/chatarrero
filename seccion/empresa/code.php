<?php
include('../../security.php');




        if(isset($_POST['updatebtn']))
        {
            $id = $_POST['edit_id'];
            $empresa = $_POST['empresa'];
            $descripcion = $_POST['descripcion'];
            $domicilio = $_POST['domicilio'];
            $municipio = $_POST['municipio'];
            $telefono = $_POST['telefono'];
         

           


            $query = "UPDATE empresa SET empresa='$empresa', descripcion='$descripcion', domicilio='$domicilio',  municipio='$municipio', telefono='$telefono' WHERE id='$id' ";
            $query_run = mysqli_query($connection, $query);

            if($query_run)
            {
               
                    $_SESSION['status'] = "Datos de empresa actualizados";
                    $_SESSION['status_code'] = "success";
                    header('Location: index.php');
                  }
               
            else
            {
                $_SESSION['status'] = "No se pudo actualizar";
                $_SESSION['status_code'] = "error";
                header('Location: index.php'); 
            }
        }


        
?>