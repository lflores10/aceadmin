<!-- TecnoVentas -->
	<li class="">
		<a href="#" class="dropdown-toggle">
			<i class="menu-icon fa fa-bar-chart-o"></i>
				TecnoVentas
			<b class="arrow fa fa-angle-down"></b>
		</a>

		<b class="arrow"></b>

		<!-- CONSULTAR LA CANTIDAD DE SUCURDALES ASOCIADAS AL CLIENTE SEGUN EL SERVICIO SERVICIO -->
		<?$row=$_SESSION['user']['data'];
		
		$sql=mysqli_query($mysqli_link,"select * from servicios where cliente=".$row["id"]." and servicio='tecnoventas'");
		//$canrow=
		?> <ul class="submenu"> <?
			while($row2=mysqli_fetch_array($sql,MYSQLI_ASSOC)){ 
				if(strlen($row2['config'])>0){
					$co = json_decode(base64_decode($row2['config']),true);
					foreach ($co as $key => $value) {
						$row2['data_'.$key] = $value;
					}
				}
			?>
			
				<li class="">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-bar-chart-o"></i>
						<? print "Sucursal ".$row2['data_sucursal']; ?>
								<b class="arrow fa fa-angle-down"></b>
					</a>

					<b class="arrow"></b>

					<ul class="submenu">
						<li class="">
							<a data-url="page/typography" href="#page/vendedores?">
								<i class="menu-icon fa fa-caret-right"></i>
								Vendedores
							</a>
					
							<b class="arrow"></b>
					
						</li>
						<li class="">
							<a data-url="page/typography" href="#page/typography?">
								<i class="menu-icon fa fa-caret-right"></i>
								Visitas
							</a>
					
							<b class="arrow"></b>
					
						</li>
						<li class="">
							<a data-url="page/typography" href="#page/typography?">
								<i class="menu-icon fa fa-caret-right"></i>
								Pedidos
							</a>
					
							<b class="arrow"></b>
					
						</li>
						<li class="">
							<a data-url="page/typography" href="#page/typography?">
								<i class="menu-icon fa fa-caret-right"></i>
								Cobranzas
							</a>
					
							<b class="arrow"></b>
					
						</li>
						<li class="">
							<a data-url="page/typography" href="#page/typography?">
								<i class="menu-icon fa fa-caret-right"></i>
								Mensajes
							</a>
					
							<b class="arrow"></b>
					
						</li>
						<li class="">
							<a data-url="page/typography" href="#page/typography?">
								<i class="menu-icon fa fa-caret-right"></i>
								Opciones
							</a>
					
							<b class="arrow"></b>
					
						</li>
						<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
							<i class="ace-icon fa " data-icon1="ace-icon fa " data-icon2="ace-icon fa "></i>
						</div>
						<li class="">
							<a data-url="page/typography" href="#page/typography?">
								<i class="menu-icon fa fa-caret-right"></i>
								Clientes
							</a>
					
							<b class="arrow"></b>
					
						</li>
						<li class="">
							<a data-url="page/typography" href="#page/typography?">
								<i class="menu-icon fa fa-caret-right"></i>
								Productos
							</a>
					
							<b class="arrow"></b>
					
						</li>
						<li class="">
							<a data-url="page/typography" href="#page/typography?">
								<i class="menu-icon fa fa-caret-right"></i>
								Cuentas por cobrar
							</a>
					
							<b class="arrow"></b>
					
						</li>
						<li class="">
							<a data-url="page/typography" href="#page/typography?">
								<i class="menu-icon fa fa-caret-right"></i>
								Marcas
							</a>
					
							<b class="arrow"></b>
					
						</li>
						<li class="">
							<a data-url="page/typography" href="#page/typography?">
								<i class="menu-icon fa fa-caret-right"></i>
								Categorias
							</a>
					
							<b class="arrow"></b>
					
						</li>
						<li class="">
							<a data-url="page/typography" href="#page/typography?">
								<i class="menu-icon fa fa-caret-right"></i>
								Reportes
							</a>
					
							<b class="arrow"></b>
					
						</li>
					</ul>
		
				</li>
		<? } ?> 
		</ul>


	</li>
