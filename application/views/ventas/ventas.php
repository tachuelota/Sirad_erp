<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Ventas
            <small>Consultar</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li><a href="<?php echo base_url();?>ventas">Ventas</a></li>
            <li class="active">Consultar</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Buscar Ventas</h3>
						<div class="box-tools pull-right">
                            <a href="<?php echo base_url();?>ventas/views/registrar_ventas" class="btn btn-default btn-flat"><i class="glyphicon glyphicon-plus"></i></a>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
	                    <div class="row">
							<div class="col-lg-10">
								<div class="form-group">
									<div class="input-daterange input-group">
									    <input type="text" class="form-control" name="start" id="date01" value="<?php echo date("d/m/Y"); ?>"/>
									    <span class="input-group-addon">Hasta</span>
									    <input type="text" class="form-control" name="end" id="date02" value="<?php echo date("d/m/Y"); ?>"/>
									</div>
								</div>
							</div>						
							<div class="col-lg-2">
								<div class="form-group">
									<button id="buscarfecha" type="button" style="width:100%" class="btn btn-info btn-flat"> <i class="fa fa-search"></i>  Buscar</button>
								</div>
							</div>
						</div>
					</div>
                    <div class="box-body table-responsive">
						<table id="ventas_table" class="table table-bordered table-striped" >
							<thead>
								<tr>
									<th>Fec. Registro</th>
									<th>Cliente</th>
									<th>Vendedor</th>
									<th>Tipo Pago</th>
									<th>Cant. Prod.</th>
									<th>Total S/.</th>
									<th>Estado</th>
								</tr>
							</thead>
							<thead>
								<tr>
									<th class="input">
										<input type="text" placeholder="Fecha" class="search_init form-control" />
									</th>
									<th class="input">
										<input type="text" placeholder="Cliente" class="search_init form-control" />
									</th>
									<th class="input">
										<input type="text" placeholder="Vendedor" class="search_init form-control" />
									</th>
									<th class="input">
										<input type="text" placeholder="Tipo Pago" class="search_init form-control" />
									</th>
									<th></th>
									<th></th>
									<th class="customselect" nrorow="6">
										<select class="form-control">
											<option value="">Todos</option>
											<option value="Pagada">Pagada</option>
											<option value="Anulada">Anulada</option>
											<option value="Credito">Credito</option>											
											<option value="Separacion">Separacion</option>
										</select>
									</th>									
								</tr>
							</thead>
							<tbody></tbody>
						</table>
					</div><!-- /.box-body -->
    			</div><!-- /.box -->    			
				<div class="modal fade" id="modalAnular">
					<div class="modal-dialog">
							<div class="modal-content">
							<div class="modal-header">
								<h3>Anular Venta</h3>
							</div>
							<form id="AnularForm" class="form-horizontal" method="post" action="">
								<div class="modal-body">
									<input id="venta_id" name="venta_id" type="hidden" required>
									<div class="alert alert-error">
										¿Desea realmente <strong>ANULAR</strong>
										esta venta?
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-cancelarprov" data-dismiss="modal">Cancelar</button>
									<button id="btn-anular-venta" type="button" class="btn btn-primary ">Sí</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
        </div>
    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->
