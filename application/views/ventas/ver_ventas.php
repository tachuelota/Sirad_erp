<aside class="right-side">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			VENTAS:
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
						<div class="form-horizontal">
							<div id="resumen_venta">
								<div class="box-body">
									<table class="table table-bordered table-striped">
										<tr>
											<td style="width: 25%;"> <strong>Cliente</strong>
											</td>
											<td colspan="3" style="width: 75%;">
												<?php echo $venta["Cliente"]; ?></td>
										</tr>
										<tr>
											<td style="width: 25%;"> <strong>Dirección</strong>
											</td>
											<td style="width: 25%;">
												<?php echo $venta["Cliente_direccion"];?></td>
											<td style="width: 25%;">
												<strong>Fec. Emisión</strong>
											</td>
											<td style="width: 25%;">
												<?php echo $venta["cVentaFecReg"]; ?></td>
										</tr>
										<tr>
											<td>
												<strong>Vendedor</strong>
											</td>
											<td>
												<?php echo $venta["Vendedor"]; ?></td>
											<td>
												<strong>Tipo de Pago</strong>
											</td>
											<td>
												<?php echo $venta["tipo_pago"]; ?></td>
										</tr>
									</table>
								</div>
								<div class="box-body">
									<table id="productos_table" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>Código</th>
												<th>Producto</th>
												<th>Cantidad</th>
												<th>Importe</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($dettale as $value):?>
											<tr>
												<td>
													<?php echo $value["codBarra"]; ?></td>
												<td>
													<?php echo $value["Producto"]; ?></td>
												<td>
													<?php echo $value["cant_prod"]; ?></td>
												<td>
													<?php echo $value["Total"]; ?></td>
											</tr>
											<?php endforeach ?></tbody>
									</table>
								</div>

								<div class="row">
									<div class="col-lg-6"></div>
									<div class="col-lg-6">
										<div class="box-body">
											<table class="table table-bordered table-striped">
												<tr>
													<td style="width: 50%;">
														<strong>Subtotal</strong>
													</td>
													<td style="width: 50%;">
														<?php echo $venta["SubTotal"];?></td>
												</tr>
												<tr>
													<td>
														<strong>Descuento</strong>
													</td>
													<td>
														<?php echo $venta["Descuento"];?>%</td>
												</tr>
												<tr>
													<td>
														<strong>IGV</strong>
													</td>
													<td>
														<?php echo $venta["TipoIGV"];?>%</td>
												</tr>
												<tr>
													<td>
														<strong>Total</strong>
													</td>
													<td>
														<?php echo $venta["Total"];?></td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<a href="<?php echo base_url() ?>ventas/views/cons_ventas" class="btn btn-success btn-flat"> <i class="fa fa-reply"></i>
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