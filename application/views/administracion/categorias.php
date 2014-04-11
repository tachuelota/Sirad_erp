<aside class="right-side">
	<section class="content-header">
			<h1>Categorías<small>Consultar</small></h1>
			<ol class="breadcrumb">
				<li>
					<a href="<?php echo base_url();?>">Home</a>
				</li>
				<li>
					<a href="<?php echo base_url();?>administracion/">Administración</a>
				</li>
				<li class="active">Categorías</li>
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
							<table class="table table-striped table-bordered bootstrap-datatable datatable" id="categorias_table" data-source = "<?php echo base_url();?>administracion/servicios/getCategoria">
								<thead>
									<tr>
										<th>Nombre</th>
										<th>Descripción</th>
										<th>Estado</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
						</div>
						<!--MODALS-->	
					<div class="modal fade" id="modalCategoria">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Registrar Categoría</h4>
								</div>
								<form id="CategoriaForm" class="form-horizontal" method="post" action-1="<?php echo base_url();?>administracion/categorias/registrar" action-2="<?php echo base_url();?>administracion/categorias/editar">
									<input type="hidden" id="idCategoria" name="idCategoria">
									<div class="modal-body">
										<fieldset>
											<div class="form-group">
												<label class="col-lg-4 control-label" for="nom-categoria">Nombre de Categoría</label>
												<div class="col-lg-8">
													<div class="input-group">
														<input class="form-control validate[required,custom[onlyLetterNumberSp]]" id="nom_categoria" name="nom_categoria" type="text" data-prompt-position="topLeft">
														<span class="input-group-addon"><i class="fa ion-social-buffer"></i></span>
													</div>													
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-4 control-label" for="desc-categoria">Descripción</label>
												<div class="col-lg-8">
													<textarea class="form-control validate[required]" id="desc_categoria" name="desc_categoria" data-prompt-position="topLeft"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-4 control-label" for="estado-tienda">Estado</label>
												<div class="col-lg-8">
													<select id="selectEstado" name="selectEstado" class="form-control validate[required]">
														<option value="1">Habilitado</option>
														<option value="0">Inhabilitado</option>
													</select>
												</div>
											</div>
										</fieldset>
									</div>
									<div class="modal-footer">
										<button type="reset" class="btn btn-flat btn-default btn-cancelarprov" data-dismiss="modal">Cancelar</button>
										<button id="btn-reg-categoria" type="button" class="btn btn-flat btn-primary ">Registrar</button>
										<button id="btn-editar-categoria" type="button" class="btn btn-flat btn-primary " style="display:none">Guardar</button>
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