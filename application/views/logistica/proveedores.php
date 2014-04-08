<aside class="right-side">
	<section class="content-header">
		<h1>Proveedores<small>Consultar</small></h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url();?>">Home</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>logistica">Logistica</a>
			</li>
			<li class="active">Proveedores</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-body">						
						<div class="form-horizontal">
							<div class="box-tools pull-right">
	                            <button id="btn-reg" class="btn btn-default btn-flat"><i class="glyphicon glyphicon-plus"></i></button>
	                        </div>
	                        <div class="control-group">
								<label class="control-label" for="tipo"></label>
							</div>							
						</div>					
						<hr>
					</div>
					<div class="box-body table-responsive">
						<table class="table table-striped table-bordered bootstrap-datatable datatable" id="proveedores_table" 
						data-source = "<?php echo base_url();?>logistica/servicios/getProveedor">
							<thead>
								<tr>
									<th>RUC</th>
									<th>Razón Social</th>
									<th>Teléfono</th>
									<th>Email</th>						
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
					<!--MODALS-->
					<div class="modal fade" id="modalProveedores">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Registrar Proveedor</h4>
								</div>
								<form id="ProveedorForm" class="form-horizontal" method="post" action-1="<?php echo base_url();?>logistica/proveedores/registrar" action-2="<?php echo base_url();?>logistica/proveedores/editar">
									<div class="modal-body">
										<input id="codigo" name="codigo" type="hidden">
										<fieldset>
											<div class="form-group">
												<label class="col-lg-4 control-label" for="ruc">RUC</label>
												<div class="col-lg-8">
													<div class="input-group">
														<input class="form-control focused validate[required,custom[onlyNumberSp]] validate[maxSize[11]] validate[minSize[11]]" id="ruc" name="ruc" type="text" data-prompt-position="topLeft">
														<span class="input-group-addon"><i class="fa fa-rub"></i></span>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-4 control-label" for="razonSocial">Razón Social</label>
												<div class="col-lg-8">
													<div class="input-group">
														<input class="form-control focused validate[required,custom[onlyLetterNumberSp]]" type="text" id="razonsocial" name="razonsocial" data-prompt-position="topLeft">
														<span class="input-group-addon"><i class="glyphicon glyphicon-registration-mark"></i></span>
													</div>	
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-4 control-label" for="cuenta">Cuenta Corriente</label>
												<div class="col-lg-8">
													<div class="input-group">
														<input class="form-control focused validate[required,custom[onlyNumberSp]]" id="ccorriente" name="ccorriente" type="text" maxlength="20" data-prompt-position="topLeft">
														<span class="input-group-addon"><i class="fa  fa-credit-card"></i></span>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-4 control-label" for="direccion">Dirección</label>
												<div class="col-lg-8">
													<div class="input-group">
														<input class="form-control focused validate[required]" id="direccion" name="direccion" type="text" data-prompt-position="topLeft">
														<span class="input-group-addon"><i class="ion-home"></i></span>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-4 control-label" for="telefono">Teléfono</label>
												<div class="col-lg-8">
													<div class="input-group">
														<input class="form-control focused validate[required,custom[onlyNumberSp]] validate[maxSize[9]] " placeholder="999999999" id="telefono" name="telefono" type="text" data-prompt-position="topLeft">
														<span class="input-group-addon"><i class="fa fa-phone"></i></span>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-4 control-label" for="email">Email</label>
												<div class="col-lg-8">
													<div class="input-group">
														<input class="form-control focused validate[required,custom[email]]"  id="email" name="email" type="email" data-prompt-position="topLeft">
														<span class="input-group-addon"><i class="fa  fa-envelope"></i></span>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-4 control-label" for="paginaweb">Página Web</label>
												<div class="col-lg-8">
													<div class="input-group">
														<input class="form-control focused" id="paginaweb" name="paginaweb" type="text">
														<span class="input-group-addon"><i class="fa fa-inbox"></i></span>
													</div>
												</div>
											</div>
										</fieldset>
									</div>
									<div class="modal-footer">
										<button type="reset" class="btn btn-cancelarprov" data-dismiss="modal">Cancelar</button>
										<button id="btn-reg-proveedor" type="button" class="btn btn-primary ">Registrar</button>
										<button id="btn-editar-proveedor" type="button" class="btn btn-primary " style="display:none">Guardar</button>
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