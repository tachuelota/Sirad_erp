<aside class="right-side">
	<section class="content-header">
		<h1>
			Reporte Ventas
			<small>Tienda/Zona</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url();?>">Home</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>ventas">Ventas</a>
			</li>
			<li class="active">Reporte Ventas</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#tab_1" data-toggle="tab">Ventas en Tienda</a>
						</li>
						<li>
							<a href="#tab_2" data-toggle="tab">Ventas en Zona</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_1">
							<div id="RepVentasForm" method="post" action-1="<?php echo base_url();?>ventas/servicios/reporte_ventas_bytienda">
								<div class="row">
									<div class="col-lg-8">
										<div class="form-group">
											<div class="input-daterange input-group">
											    <input type="text" class="form-control" name="start" id="date01" value="<?php echo date("d/m/Y"); ?>"/>
											    <span class="input-group-addon">Hasta</span>
											    <input type="text" class="form-control" name="end" id="date02" value="<?php echo date("d/m/Y"); ?>"/>
											</div>
										</div>
									</div>
									<div class="col-lg-2">	
										<button id="buscarfecha" type="button" class="col-lg-12 btn btn-info btn-flat btn-buscarp"> <i class="fa fa-search"></i>  Buscar</button>
									</div>
									<div class="col-lg-2">	
										<button id="btn-rpt-tienda" type="button" class="col-lg-12 btn btn-success btn-flat" >Reporte</button>
									</div>
								</div>
							</div>
							<table id="ventas_table" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Fecha Registro</th>
										<th>Tienda</th>
										<th>Cliente</th>
										<th>Producto</th>
										<th>Serie</th>
										<th>Cant.</th>
										<th>Desct. S/.</th>
										<th>Prec. Costo S/.</th>
										<th>Prec. Contado S/.</th>
										<th>Prec. Credito S/.</th>
									</tr>
								</thead>
								<tbody></tbody>
							</table>
						</div>
						<!-- /.tab-pane -->
						<div class="tab-pane" id="tab_2">
							<div id="RepVentasZonasForm" method="post" action-1="<?php echo base_url();?>ventas/servicios/reporte_ventas_byzona">
								<div class="row">
									<div class="col-lg-8">
										<div class="form-group">
											<div class="input-daterange input-group">
											    <input type="text" class="form-control" name="start" id="date01zona" value="<?php echo date("d/m/Y"); ?>"/>
											    <span class="input-group-addon">Hasta</span>
											    <input type="text" class="form-control" name="end" id="date02zona" value="<?php echo date("d/m/Y"); ?>"/>
											</div>
										</div>
									</div>
									<div class="col-lg-2">	
										<button id="buscarfechazona" type="button" class="col-lg-12 btn btn-info btn-flat btn-buscarp"> <i class="fa fa-search"></i>  Buscar</button>
									</div>
									<div class="col-lg-2">	
										<button id="btn-rpt-zona" type="button" class="col-lg-12 btn btn-success btn-flat" >Reporte</button>
									</div>
								</div>							
								<table id="ventas_table_zona" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>Fecha Registro</th>
											<th>Tienda</th>
											<th>Cliente</th>
											<th>Producto</th>
											<th>Serie</th>
											<th>Cant.</th>
											<th>Desct. S/.</th>
											<th>Prec. Costo S/.</th>
											<th>Prec. Contado S/.</th>
											<th>Prec. Credito S/.</th>
										</tr>
									</thead>
									<tbody></tbody>
								</table>
							</div>
						</div>
						<!-- /.tab-pane -->
					</div>
					<!-- /.tab-content -->
				</div>
				<!-- nav-tabs-custom -->
				<!--------------MODAL EXPORTAR------------------>
				<div class="modal fade" id="exportmodal">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">EXPORTAR</h4>
							</div>
							<div class="modal-body">
								<form method="post" target="_blank" id="CreatePDFForm">
									<input type="hidden" name="title" id="title"/>
									<input type="hidden" name="table_venta" id="table_venta"/>
									<div class="row">
										<div class="col-lg-6">
											<!-- small box -->
											<div class="small-box bg-yellow">
												<div class="inner">
													<h3>PDF</h3>
													<p>.pdf</p>
												</div>
												<div class="icon">
													<i class="ion ion-document-text"></i>
												</div>
												<a href="#" id="pdfbutton" class="small-box-footer">
													Exportar
													<i class="fa fa-arrow-circle-right"></i>
												</a>
											</div>
										</div>
										<!-- ./col -->
										<div class="col-lg-6">
											<!-- small box -->
											<div class="small-box small-box bg-green">
												<div class="inner">
													<h3>Exel</h3>
													<p>.xls</p>
												</div>
												<div class="icon">
													<i class="ion ion-pie-graph"></i>
												</div>
												<a href="#" id="xlsutton" class="small-box-footer">
													Exportar
													<i class="fa fa-arrow-circle-right"></i>
												</a>
											</div>
										</div>
										<!-- ./col -->
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</aside>
</div>