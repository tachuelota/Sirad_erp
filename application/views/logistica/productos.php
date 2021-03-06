<aside class="right-side">
	<section class="content-header">
		<h1>Productos<small>Consultar</small></h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url();?>">Home</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>logistica">LogÍstica</a>
			</li>
			<li class="active">Productos</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Lista <small>de Productos</small></h3>
						<div class="box-tools pull-right">
                            <button  id="btn-reg" class="btn btn-default btn-flat"><i class="glyphicon glyphicon-plus"></i> Nuevo Producto</button>
                        </div>
					</div>
					<div class="box-body table-responsive">
						<table class="table table-striped table-bordered bootstrap-datatable datatable" id="productos_table"
						data-source = "<?php echo base_url();?>logistica/servicios/getProductos">
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Marca</th>									
									<th>Categoría</th>
									<th>Tipo</th>									
									<th>Stock</th>
									<th>Pre. Costo</th>
									<th>Pre. Venta</th>
									<th>Unidad Medida</th>									
									<th>Cod. Barra</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
						</div>		
					<div class="modal fade" id="modalProductos">
						<div class="modal-dialog" style="width:1050px;">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Registrar Producto</h4>
								</div>
								<form id="ProductoForm" class="form-horizontal" action-1="<?php echo base_url();?>logistica/productos/registrar" action-2="<?php echo base_url();?>logistica/productos/editar">
									<div class="modal-body">
										<input id="codigo" name="codigo" type="hidden">
										<input type="hidden" name="idLocal" id="idLocal" value="<?php echo $local["nLocal_id"];?>">
										<fieldset>
											<div class="col-lg-6">
												<!--<div class="form-group">
													<label class="col-lg-4 control-label" for="serie-prod">Serie</label>
													<div class="col-lg-8">
														<input class="form-control validate[required,custom[onlyLetterNumber]]" maxlength="15" id="serie" name="serie" type="text" data-prompt-position="topLeft"></div>
												</div>-->
												<!--<div class="form-group">
													<label class="col-lg-4 control-label" for="talla-prod">Talla</label>
													<div class="col-lg-8">
														<input class="form-control validate[required,custom[onlyNumberSp]]" maxlength="15" id="talla" name="talla" type="text" data-prompt-position="topLeft"></div>
												</div>-->
												<div class="form-group">
													<label class="col-lg-4 control-label" for="marca-prod">Marca</label>
													<div class="col-lg-8">
														<select id="marca" class="form-control SelectAjax" name="marca" data-source="<?php echo base_url();?>administracion/servicios/getMarcas_Activo" attrval="nMarca_id" attrdesc="cMarcaDesc" data-prompt-position="topLeft"></select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-4 control-label" for="cate-prod">Categoría</label>
													<div class="col-lg-8">
														<select id="categoria" class="form-control SelectAjax" name="categoria" data-source="<?php echo base_url();?>administracion/servicios/getCategoria_Activo" attrval="nCategoria_id" attrdesc="cCategoriaNom"></select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-4 control-label" for="tipo">Tipo</label>
													<div class="col-lg-8">
														<select id="tipprod" class="form-control SelectAjax" name="tipprod" data-source="<?php echo base_url();?>administracion/servicios/get_tipoproducto" attrval="nTipoProducto_id" attrdesc="cTipoProductoNom"></select> 
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-4 control-label" for="tipo">Unidad de Medida</label>
													<div class="col-lg-8">
														<select id="unimedida" class="form-control SelectAjax" name="unimedida" data-source="<?php echo base_url();?>administracion/servicios/getConstantesByClase/6" attrval="cConstanteValor" attrdesc="cConstanteDesc"></select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-4 control-label" for="descripcion">Descripción</label>
													<div class="col-lg-8">
														<textarea class="form-control validate[required]" name="descripcion" maxlength="200" id="descripcion" rows="2" cols="" data-prompt-position="topLeft"></textarea>
													</div>
												</div>
												<!--<div class="form-group">
													<label class="col-lg-4 control-label" for="preCsot">Precio Costo</label>
													<div class="col-lg-8">
														<div class="input-group">
															<input  class="form-control validate[required,custom[number]]" name="preciocosto" id="preciocosto" type="text" data-prompt-position="topLeft">
															<span class="input-group-addon">.00</span>
														</div>
													</div>
												</div>-->
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label class="col-lg-4 control-label" for="preContado">Precio Venta</label>
													<div class="col-lg-8">
														<div class="input-group">
															<input class="form-control validate[required,custom[number]]" name="precioventa" id="precioventa" type="text" data-prompt-position="topLeft">
															<span class="input-group-addon">.00</span>
														</div>
													</div>
												</div>

												<!--<div class="form-group">
													<label class="col-lg-4 control-label" for="preCredito">Precio Credito</label>
													<div class="col-lg-8">
														<input class="form-control validate[required,custom[number]]" name="preciocredito" id="preciocredito" type="text" data-prompt-position="topLeft"></div>
												</div>-->
												<div class="form-group">
													<label class="col-lg-4 control-label" for="StockMin">Stock Min</label>
													<div class="col-lg-8">
														<div class="input-group">
															<input  class="form-control validate[required,custom[onlyNumberSp]]" maxlength="11" name="stockmin" id="stockmin" type="text" data-prompt-position="topLeft">
															<span class="input-group-addon"><i class="fa fa-paste"></i></span>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-4 control-label" for="StockMax">Stock Max</label>
													<div class="col-lg-8">
														<div class="input-group">
															<input class="form-control validate[required,custom[onlyNumberSp]]" maxlength="11" name="stockmax" id="stockmax" type="text" data-prompt-position="topLeft">
															<span class="input-group-addon"><i class="fa fa-paste"></i></span>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-4 control-label" for="tipo_impuesto">Afectado por Impuesto</label>
													<div class="col-lg-8">
														<select id="tipo_impuesto" class="form-control SelectAjax" name="tipo_impuesto" data-source="<?php echo base_url();?>administracion/servicios/getConstantesByClase/13" attrval="cConstanteValor" attrdesc="cConstanteDesc"></select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-4 control-label" for="estado">Estado</label>
													<div class="col-lg-8">
														<select id="estado" required name="estado" data-rel="chosen" class="form-control">
															<option value="1">Habilitado</option>
															<option value="0">Inhabilitado</option>
														</select>
													</div>
												</div>
											</div>
										</fieldset>
									</div>
									<div class="modal-footer">
										<button type="reset" class="btn btn-flat btn-default btn-cancelarprov" data-dismiss="modal">Cancelar</button>
										<button id="btn-reg-prod" type="button" class="btn btn-flat btn-primary ">Registrar</button>
										<button id="btn-editar-prod" type="button" class="btn btn-flat btn-primary " style="display:none">Guardar</button>
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











