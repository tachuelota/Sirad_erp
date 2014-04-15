<aside class="right-side">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			CAJA:
			<small>VER DATOS</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url();?>">Home</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>ventas">Ventas</a>
			</li>
			<li class="active">Ver</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-body">
						<section id="resumen_venta" class="content invoice">                    
		                    <!-- title row -->
		                    <div class="row">
		                        <div class="col-xs-12">
		                            <h2 class="page-header">
		                                <i class="fa fa-globe"></i> CLM Developers SAC
		                                <small class="pull-right">Fecha: <?php echo date("d/m/Y"); ?></small>
		                            </h2>                            
		                        </div><!-- /.col -->
		                    </div>
							<!-- info row -->
		                    <div class="row invoice-info">
		                        <div class="col-sm-4 invoice-col">
		                            De
		                            <address>
		                                <strong>CLM Developers, SAC.</strong><br>
		                                Bernardo Alcedo 187<br>
		                                Urb. San Fernando, Trujillo<br>
		                                <i class="fa fa-phone"></i> +51 999494821 / +51 044 612874<br/>
		                                <i class="fa fa-envelope"></i> contacto@clmdevelopers.com
		                            </address>
		                        </div><!-- /.col -->
		                        
		                    </div><!-- /.row -->
							<!-- TABLA DE PRODUCTOS POR COMPRAR aqui -->
							<!-- Table row -->
		                    <div class="row">
		                        <div class="col-xs-12 table-responsive">
		                            <table id="tabla_resumen_productos" class="table table-striped">
										<thead >
											<tr>
												<th>Fecha Apertura</th>
												<th>Fecha Cierre</th>
												<th>Saldo Final</th>
												<th>Faltante / Sobrante</th>
												<th>Saldo Final Caja</th>
											</tr>
										</thead>
										<tbody>
											</tbody>
										</tbody>
									</table>
								</div>
							</div>
							<br>
							<!-- END TABLA DE PRODUCTOS -->
							<div class="row">
								<div class="col-xs-6 col-lg-6"></div>
								<div class="col-xs-6 col-lg-6">
									<table class="table">
										<tr>
											<td >
												<strong>Subtotal</strong>
											</td>
											
											<tr>
												
											</tr>
											<tr>
												
											</tr>
											<tr>
												<td>
													<strong>Total</strong>
												</td>
												
											</tr>
											<tr>
											</tr>
									</table>
								</div>
							</div>
						</section>
					</div>
					<div class="box-footer">
						<a href="<?php echo base_url() ?>ventas/views/inicie_caja" class="btn btn-success btn-flat"> <i class="fa fa-reply"></i>
							Volver
						</a>
						<a href="#" id="imprimir" class="btn btn-success btn-flat" style="float: right;"> <i class="fa fa-print"></i>
							Imprimir
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /.content -->
</aside>
<!-- /.right-side -->
</div>
<!-- ./wrapper -->