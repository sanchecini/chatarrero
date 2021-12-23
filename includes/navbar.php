
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="http://localhost/chatarrero/index.php" class="brand-logo">
                <img class="logo-abbr" src="images/camion.png" alt="">
                <img class="logo-compact" src="images/letras.png" alt="">
                <img class="brand-title" src="images/letras.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown show">
                                <div class="dropdown-menu p-0 m-0 show">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search Here" aria-label="Search">
                                    </form>
                                </div>
								<span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23.7871 22.7761L17.9548 16.9437C19.5193 15.145 20.4665 12.7982 20.4665 10.2333C20.4665 4.58714 15.8741 0 10.2333 0C4.58714 0 0 4.59246 0 10.2333C0 15.8741 4.59246 20.4665 10.2333 20.4665C12.7982 20.4665 15.145 19.5193 16.9437 17.9548L22.7761 23.7871C22.9144 23.9255 23.1007 24 23.2816 24C23.4625 24 23.6488 23.9308 23.7871 23.7871C24.0639 23.5104 24.0639 23.0528 23.7871 22.7761ZM1.43149 10.2333C1.43149 5.38004 5.38004 1.43681 10.2279 1.43681C15.0812 1.43681 19.0244 5.38537 19.0244 10.2333C19.0244 15.0812 15.0812 19.035 10.2279 19.035C5.38004 19.035 1.43149 15.0865 1.43149 10.2333Z" fill="#A4A4A4"/></svg>
                                </span>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
														
                            
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
									<div class="header-info">
										<span>Hola, <strong> <?php  echo $_SESSION['username'];?></strong></span>
									</div>
                                    <img src="images/reciclo.jpg" width="20" alt=""/>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="#" class="dropdown-item ai-icon" data-toggle="modal" data-target="#logoutModal">
                                        <svg id="icon-logout"  class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cierre de sesion</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    </div>
                    <div class="modal-body">¿Estas seguro que deseas cerrar sesión ?</div>
                    <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>

                    <form action="logincode.php" method="POST"> 
                    
                        <button type="submit" name="logout_btn" class="btn btn-primary">Acepto</button>

                    </form>


                    </div>
                </div>
                </div>
            </div>
        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Ventas</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="http://localhost/chatarrero/seccion/ventas/addventa.php">Agregar venta</a></li>
							<li><a href="http://localhost/chatarrero/seccion/ventas/index.php">Historial de ventas</a></li>
							
						</ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-television"></i>
							<span class="nav-text">Compras</span>
						</a>
                        <ul aria-expanded="false">
                        <li><a href="http://localhost/chatarrero/seccion/compras/addcompra.php">Agregar compra</a></li>
                        <li><a href="http://localhost/chatarrero/seccion/compras/index.php">Historial de compras</a></li>
                            </ul>
                     </li>
                     <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-controls-3"></i>
							<span class="nav-text">Materiales</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="http://localhost/chatarrero/seccion/materiales/index.php">Materiales</a></li>
                            <li><a href="http://localhost/chatarrero/seccion/materiales/precios.php">Precio por cliente</a></li>
                          
                        </ul>
                    </li>

                    <li><a href="http://localhost/chatarrero/seccion/clientes/index.php" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-settings-2"></i>
							<span class="nav-text">Clientes</span>
						</a>
					</li>

                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Empresa</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="http://localhost/chatarrero/seccion/empresa/index.php">Datos de empresa</a></li>
                            <li><a href="#">Choferes</a></li>
                            <li><a href="#">Vehiculos</a></li>
                            
                        </ul>
                    </li>
                    
                </ul>
            
				
			</div>
        </div>