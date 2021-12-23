<!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="../../vendor/global/global.min.js"></script>
	<script src="../../vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="../../vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="../../js/custom.min.js"></script>
	<script src="../../js/deznav-init.js"></script>
	
	<!-- Counter Up -->
    <script src="../../vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="../../vendor/jquery.counterup/jquery.counterup.min.js"></script>	
		
	

     
    <!-- Datatable -->
    <script src="../../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../../js/plugins-init/datatables.init.js"></script>

  <!-- SweetAlert 2 -->
    <script src="../../js/sweetalert2.all.min.js"></script>
   
  

    <?php
    if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
        ?>
      
        <script>

            Swal.fire({
            title: '<?php echo $_SESSION['status']; ?>',
            icon: '<?php echo $_SESSION['status_code']; ?>',
            button: "OK!!",
            
            });

            
        </script>

        <?php
        unset($_SESSION['status']);

    }

   
  ?>