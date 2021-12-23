<?php
include('../../security.php');

if(isset($_POST['registrar']))
{
    $material = $_POST['material'];
    $kilos = $_POST['kilos'];
   
    
    
    $nombre_query = "SELECT * FROM materiales WHERE material='$material' ";
    $nombre_query_run = mysqli_query($connection, $nombre_query);
    if(mysqli_num_rows($nombre_query_run) > 0)
    {
       
        $_SESSION['status']= "Este material ya existe";
        $_SESSION['status_code'] = "error";
        header('Location: index.php');
    }
    else{

        $query = "INSERT INTO materiales (material, kilos) VALUES ('$material','$kilos')";
        $query_run = mysqli_query($connection, $query);
                
        if($query_run)
        {
        // echo "Saved";
         $_SESSION['status'] = "Material agregado";
        $_SESSION['status_code'] = "success";
        header('Location: index.php');
            }
            else 
                {
                    $_SESSION['status'] = "Material no agregado";
                    $_SESSION['status_code'] = "error";
                    header('Location: index.php');  
                }
            
      }
    
}


        if(isset($_POST['updatebtn']))
        {
            $id = $_POST['edit_id'];

            $material = $_POST['material'];
            $kilos = $_POST['kilos'];

           


            $query = "UPDATE materiales SET material='$material', kilos='$kilos' WHERE id='$id' ";
            $query_run = mysqli_query($connection, $query);

            if($query_run)
            {
               
                    $_SESSION['status'] = "Material actualizado";
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

                    

            $query = "DELETE FROM materiales WHERE id='$id' ";
            $query_run = mysqli_query($connection, $query);

            if($query_run)
            {
                
                $_SESSION['status'] = "Material eliminado";
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

       
 if(isset($_POST['registrarprecio']))
    {
    $nombre = $_POST['nombre'];
    $material = $_POST['material'];
    $precio = $_POST['precio'];
   
    
    

        $query = "INSERT INTO precios (cliente_id, material_id, precio) VALUES ('$nombre','$material','$precio')";
        $query_run = mysqli_query($connection, $query);
                
        if($query_run)
        {
        // echo "Saved";
         $_SESSION['status'] = "Precios agregados";
        $_SESSION['status_code'] = "success";
        header('Location: precios.php');
            }
            else 
                {
                    $_SESSION['status'] = "Precios no agregado";
                    $_SESSION['status_code'] = "error";
                    header('Location: precios.php');  
                }
            
      }
    
      
      if(isset($_POST['updateprecio']))
      {
          $id = $_POST['precio_id'];

          $cliente = $_POST['nombre'];
          $material = $_POST['material'];
          $precio = $_POST['precio'];

         


          $query = "UPDATE precios SET precio='$precio' WHERE id='$id' ";
          $query_run = mysqli_query($connection, $query);

          if($query_run)
          {
             
                  $_SESSION['status'] = "Precio actualizado";
                  $_SESSION['status_code'] = "success";
                  header('Location: precios.php');
                }
             
          else
          {
              $_SESSION['status'] = "No se pudo actualizar";
              $_SESSION['status_code'] = "error";
              header('Location: precios.php'); 
          }
      }


      if(isset($_POST['deleteprecio']))
      {
          $id = $_POST['delete_id'];

                  

          $query = "DELETE FROM precios WHERE id='$id' ";
          $query_run = mysqli_query($connection, $query);

          if($query_run)
          {
              
              $_SESSION['status'] = "Precio eliminado";
              $_SESSION['status_code'] = "success";
              header('Location: precios.php'); 
          }
          else
          {
              $_SESSION['status'] = "No se pudo eliminar";       
              $_SESSION['status_code'] = "error";
              header('Location: precios.php'); 
          }    
      }

?>