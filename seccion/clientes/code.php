<?php
include('../../security.php');

if(isset($_POST['registrar']))
{
    $nombre = $_POST['nombre'];
    $actividad = $_POST['actividad'];
    $domicilio = $_POST['domicilio'];
    $municipio = $_POST['municipio'];
    $telefono = $_POST['telefono'];
    $whatsapp = $_POST['whatsapp'];
    
    
    $nombre_query = "SELECT * FROM clientes WHERE nombre='$nombre' ";
    $nombre_query_run = mysqli_query($connection, $nombre_query);
    if(mysqli_num_rows($nombre_query_run) > 0)
    {
       
        $_SESSION['status']= "Este cliente ya existe";
        $_SESSION['status_code'] = "error";
        header('Location: index.php');
    }
    else{

        $query = "INSERT INTO clientes (nombre, actividad, domicilio, municipio, telefono, whatsapp) VALUES ('$nombre','$actividad','$domicilio','$municipio','$telefono','$whatsapp')";
        $query_run = mysqli_query($connection, $query);
                
        if($query_run)
        {
        // echo "Saved";
         $_SESSION['status'] = "Cliente agregado";
        $_SESSION['status_code'] = "success";
        header('Location: index.php');
            }
            else 
                {
                    $_SESSION['status'] = "Cliente no agregado";
                    $_SESSION['status_code'] = "error";
                    header('Location: index.php');  
                }
            
      }
    
}


        if(isset($_POST['updatebtn']))
        {
            $id = $_POST['edit_id'];
            $nombre = $_POST['nombre'];
            $actividad = $_POST['actividad'];
            $domicilio = $_POST['domicilio'];
            $municipio = $_POST['municipio'];
            $telefono = $_POST['telefono'];
            $whatsapp = $_POST['whatsapp'];

           


            $query = "UPDATE clientes SET nombre='$nombre', actividad='$actividad', domicilio='$domicilio',  municipio='$municipio', telefono='$telefono',  whatsapp='$whatsapp' WHERE id='$id' ";
            $query_run = mysqli_query($connection, $query);

            if($query_run)
            {
               
                    $_SESSION['status'] = "Cliente actualizado";
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


        if(isset($_POST['delete_btn']))
        {
            $id = $_POST['delete_id'];

            $promociones_query = "SELECT * FROM clientes WHERE id='$id'";
            $promociones_query_run = mysqli_query($connection, $promociones_query);

          

            $query = "DELETE FROM clientes WHERE id='$id' ";
            $query_run = mysqli_query($connection, $query);

            if($query_run)
            {
                
                $_SESSION['status'] = "Cliente eliminado";
                $_SESSION['status_code'] = "success";
                header('Location: index.php'); 
            }
            else
            {
                $_SESSION['status'] = "No se pudo eliminar";       
                $_SESSION['status_code'] = "error";
                header('Location: index.php'); 
            }    
        }
?>