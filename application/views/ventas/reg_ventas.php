<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Ventas
			<small>Registrar</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url();?>">Home</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>ventas/views/registrar_ventas">Ventas</a>
			</li>
			<li class="active">Registrar</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div id="rootwizard">
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li>
								<a href="#tab1" data-toggle="tab">PRODUCTOS</a>
							</li>
							<li>
								<a href="#tab2" data-toggle="tab">DETALLE</a>
							</li>
							<li>
								<a href="#tab3" data-toggle="tab">RESUMEN</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane" id="tab1">
								<div class="row">
									<div class="col-lg-4">
										<div class="form-group">
											<div class="input-group">                                            
	                                            <input class="form-control" id="producto" type="text" placeholder="Producto" readonly>
	                                            <div class="btn btn-info btn-flat input-group-addon btn-buscarp">
	                                                <i class="fa fa-search"></i>
	                                            </div>
											</div>
										</div>
									</div>
									<div class="col-lg-2">
										<div class="form-group">
												<input id="precioventa" type="text" class="form-control" placeholder="Precio Venta">
										</div>
									</div>
									<div class="col-lg-1">
										<div class="form-group">
											<input id="unidadmedida" class="form-control" type="text" placeholder="U.M." readonly >
										</div>
									</div>
									<div class="col-lg-2">
										<div class="form-group">
											<input id="cantidad" type="text" class="form-control" placeholder="Cantidad">
										</div>
									</div>
									<div class="col-lg-2">
										<div class="form-group">
											<button  style="width:100%" id="agregar_producto" type="button" class="btn btn-info btn-flat"> <i class="fa fa-plus"></i>  Agregar Prod. </button>
										</div>
									</div>
								</div>
								<hr>
								<h4>Productos Agregados</h4>
								<hr>
								<table id="select_productos_venta" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>Código</th>
											<th>Descripción</th>
											<th>Cantidad</th>
											<th>Precio Venta</th>
										</tr>
									</thead>
									<tbody></tbody>
									<tfoot>
										<tr>
											<td colspan='3'>Total</td>
											<td id='total_contado'>0</td>
										</tr>
									</tfoot>
								</table>
							</div>
							<div class="tab-pane" id="tab2">
								<form id="EnviarVentaForm" class="form-horizontal" action-1="<?php echo base_url();?>ventas/ventas/registrar">
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
										    	<label for="cliente" class="col-lg-4 control-label">Cliente</label>
											    <div class="col-lg-8"> 
										    		<div class="input-group">
										    			<input type="hidden" id="cliente_id" name="cliente_id" value="<?php echo $clianonimo["nCliente_id"] ?>">                                    
			                                            <input class="form-control" id="cliente" type="text" readonly value="<?php echo $clianonimo["cClienteNom"]." ".$clianonimo["cClienteApe"] ?>">
			                                            <div class="btn btn-info btn-flat input-group-addon btn-buscarc">
			                                                <i class="fa fa-search"></i>
			                                            </div>
													</div>
												</div> 
										  	</div>
											<div class="form-group">
												<label class="col-lg-4 control-label" for="forma_pago">Tipo de Pago</label>
												<div class="col-lg-8">
													<select class="form-control SelectAjax" name="forma_pago" id="forma_pago" data-source="<?php echo base_url();?>
														administracion/servicios/getConstantesByClase/2" attrval="cConstanteValor" attrdesc="cConstanteDesc">
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-4 control-label" for="tipo_moneda">Tipo moneda</label>
												<div class="col-lg-8">
													<select class="form-control" name="tipo_moneda" id="tipo_moneda" data-source="<?php echo base_url();?>
														administracion/servicios/getTipoMonedas" attrval="nTipoMoneda" attrdesc="cTipoMonedaDesc">
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-4 control-label" for="descuento">Venta Descuento</label>
												<div class="col-lg-8">
													<div class="input-group">                                      
			                                            <input class="form-control validate[required,custom[number],min[0],max[100]]" name="descuento" id="descuento" type="text" value="0">
			                                            <div class="input-group-addon">
			                                                %
			                                            </div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-4 control-label" for="subtotal">Subtotal</label>
												<div class="col-lg-8">
													<div class="input-group">
														<input class="form-control" name="subtotal" id="subtotal" type="text" readonly>
														<div class="input-group-addon">
			                                                 S/.
			                                            </div>
			                                        </div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-4 control-label" for="tipo_igv">IGV</label>
												<div class="col-lg-8">
													<div class="input-group">                                 
			                                            <select class="form-control" name="tipo_igv" id="tipo_igv" data-source="<?php echo base_url();?>
															administracion/servicios/getTipoIGVActivo" attrval="nTipoIGV" attrdesc="cTipoIGV">
														</select>
			                                            <div class="input-group-addon">
			                                                %
			                                            </div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-4 control-label" for="total">Total</label>
												<div class="col-lg-8">
													<div class="input-group">
														<input class="form-control" name="total" id="total" type="text" readonly>
														 <div class="input-group-addon">
			                                                S/.
			                                            </div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6">
											<div id="saldo_block" >
												<div class="form-group">
													<label class="col-lg-4 control-label" for="amortizacion">A cuenta</label>
													<div class="col-lg-8">
														<div class="input-group">    
															<input class="form-control focused validate[required,custom[number],min[0]]" name="amortizacion" id="amortizacion" type="text" val="0">
															<div id="spanamort" class="input-group-addon"> S/.</div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-4 control-label" for="saldo">Saldo restante</label>
													<div class="col-lg-8">
														<div class="input-group">
															<input class="form-control" name="saldo" id="saldo" type="text" readonly>
															<div class="input-group-addon">
			                                                	S/.
			                                            	</div>
														</div>
													</div>
												</div>
											</div>
											<div id="cuotas_block" >
												<div class="form-group">
													<label class="col-lg-4 control-label" for="num_cuotas">N° Cuotas</label>
													<div class="col-lg-8">
														<div class="input-group">
															<input type="hidden" name="montocuota" id="montocuota">
															<input class="form-control validate[required,custom[integer],min[0]]" name="num_cuotas" id="num_cuotas" type="text">
															<div id="spancouota" class="input-group-addon">x 0.00 S/.</div>
														</div>
													</div>
												</div>
												<div class="form-group">
			                                        <label  class="col-lg-4 control-label" for="prim_cuota">Fecha 1° Cuota</label>
			                                        <div class="col-lg-8">
				                                        <div class="input-group">
				                                            <input type="text" placeholder="dd/mm/aaaa" class="form-control datepicker validate[required,custom[date]]" id="prim_cuota" name="prim_cuota">
				                                            <div class="input-group-addon">
				                                                <i class="fa fa-calendar"></i>
				                                            </div>
				                                        </div>
				                                    </div>
			                                    </div>
											</div>
											<div id="pagocont_block">
												<div class="form-group">
													<label class="col-lg-4 control-label" for="importe">Importe</label>
													<div class="col-lg-8">
														<div class="input-group">
															<input id="importe" name="importe" type="text"class="form-control validate[required,custom[number],min[0]]">
															<div class="input-group-addon">
			                                                	S/.
			                                            	</div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-4 control-label" for="vuelto">Vuelto</label>
													<div class="col-lg-8">
														<div class="input-group">
															<input id="vuelto" type="text" class="form-control" readonly>
															<div class="input-group-addon">
				                                                	S/.
			                                            	</div>
			                                            </div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-4 control-label" for="producto">Observación</label>
												<div class="col-lg-8">
													<textarea class="form-control" name="observacion" rows="2" value="" placeholder="Observaciones"></textarea>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="tab-pane" id="tab3">
								<div class="form-horizontal">
									<div id="resumen_venta">
										<table class="table table-bordered">
											<tr>
												<td style="width: 25%;"> <strong>Cliente</strong>
												</td>
												<td id="clienteR" colspan="3" style="width: 75%;"></td>
											</tr>
											<tr>
												<td style="width: 25%;"> <strong>Dirección</strong>
												</td>
												<td id="direccionR" style="width: 25%;"></td>
												<td style="width: 25%;">
													<strong>Fec. Emisión</strong>
												</td>
												<td id="fechaR" style="width: 25%;">
													<?php echo date("d/m/Y"); ?></td>
											</tr>
											<tr>
												<td>
													<strong>Vendedor</strong>
												</td>
												<td id="vendedorR">
													<?php echo $trabajador["cPersonalNom"]."-".$trabajador["cPersonalApe"];?></td>
												<td>
													<strong>Tipo de Pago</strong>
												</td>
												<td id="forma_pagoR"></td>
											</tr>
										</table>
										<!-- TABLA DE PRODUCTOS POR COMPRAR aqui -->
										<table id="tabla_resumen_productos" class="table table-striped table-bordered">
											<thead >
												<tr>
													<th style="width: 25%;">Código</th>
													<th style="width: 25%;">Producto</th>
													<th style="width: 25%;">Cantidad</th>
													<th style="width: 25%;">Valor ó Precio</th>
												</tr>
											</thead>
										</table>
										<!-- END TABLA DE PRODUCTOS -->
										<div class="row">
											<div class="col-lg-6"></div>
											<div class="col-lg-6">
												<table class="table table-bordered">
													<tr>
														<td style="width: 50%;">
															<strong>Subtotal</strong>
														</td>
														<td id="subtotalR" style="width: 50%;"></td>
													</tr>
													<tr>
														<td>
															<strong>Descuento</strong>
														</td>
														<td id="descuentoR"></td>
													</tr>
													<tr>
														<td>
															<strong>IGV</strong>
														</td>
														<td id="tipo_igvR"></td>
													</tr>
													<tr>
														<td>
															<strong>Total (S/.)</strong>
														</td>
														<td id="totalR"></td>
													</tr>
													<tr id="resumen_dolares">
														<td>
															<strong>Total ($.)</strong>
														</td>
														<td id="totalDo"></td>
													</tr>
												</table>
												<br>
												<div id="resume-credito">
													<table class="table table-striped table-bordered">
														<tr>
															<td style="width: 50%;">
																<strong>A cuenta</strong>
															</td>
															<td id="amortizacionR" style="width: 50%;"></td>
														</tr>
														<tr>
															<td>
																<strong>Saldo</strong>
															</td>
															<td id="saldoR"></td>
														</tr>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="box box-info">
							<div class="box-body">
								<ul class="pager wizard">
									<li class="previous">
										<a class="btn btn-default" href="#">Antras</a>
									</li>
									<li class="next">
										<a class="btn btn-default" href="#">Siguiente</a>
									</li>
									<li class="next finish" id="btn-enviar-form" style="display:none;">
										<a class="btn btn-info" href="javascript:;">Registrar</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="modalBuscarProducto">
				<div class="modal-dialog" style="width:1050px;">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							 <h4 class="modal-title"><i class="fa fa-search"></i> Productos</h4>
						</div>
						<div class="modal-body">
							<table id="select_producto_table" class="table table-striped table-bordered bootstrap-datatable datatable" data-source="<?php echo base_url();?>
								ventas/servicios/getProductosToVenta" style="max-height: 450px;">
								<thead>
									<tr>
										<th>Codigo</th>
										<th>Producto</th>
										<th>Precio Venta</th>
										<th>Marca</th>
										<th>Categoría</th>
										<th>Tipo</th>
										<th>Unidad Medida</th>
										<th>Oferta</th>
										<th>Stock</th>
									</tr>
								</thead>
								<tbody></tbody>
								<tfoot>
									<tr>
										<th class="input">
											<input type="text" style="width: 75px" value="Codigo" class="search_init" />
										</th>
										<th class="input">
											<input type="text"style="width: 75px" value="Producto" class="search_init" />
										</th>
										<th></th>
										<th class="input">
											<input type="text" style="width: 75px" value="Marca" class="search_init" />
										</th>
										<th class="input">
											<input type="text" style="width: 75px" value="Categoria" class="search_init" />
										</th>
										<th class="input">
											<input type="text" style="width: 75px" value="Tipo" class="search_init" />
										</th>
										<th></th>
										<th class="input">
											<input type="text" style="width: 75px" value="Oferta" class="search_init" />
										</th>
										<th></th>
									</tr>
								</tfoot>
							</table>
						</div>
						<div class="modal-footer clearfix">
							<a href="#" class="btn" data-dismiss="modal">Cancelar</a>
							<a  id="select_producto" href="#" class="btn btn-primary">Seleccionar</a>
						</div>
					</div><!-- /.modal-content -->
            	</div><!-- /.modal-dialog -->
			</div>
			<!-- Fin Modal para buscar productos -->
			<div class="modal fade" id="modalBuscarCliente">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title"><i class="fa fa-search"></i>Clientes</h4>
						</div>
						<div class="modal-body">
							<table id="select_cliente_table" class="table table-striped table-bordered bootstrap-datatable datatable" data-source="<?php echo base_url();?>
								ventas/servicios/getClientes">
								<thead>
									<tr>
										<th>Nombres</th>
										<th>Apellidos</th>
										<th>DNI</th>
										<th>Línea de Crédito</th>
									</tr>
								</thead>
								<tbody></tbody>
							</table>
						</div>
						<div class="modal-footer clearfix">
							<a href="#" class="btn" data-dismiss="modal">Cancelar</a>
							<a id="btn-select-cliente" href="#" class="btn btn-primary">Seleccionar</a>
						</div>
					</div><!-- /.modal-content -->
            	</div><!-- /.modal-dialog -->
			</div>
			<div class="modal fade" id="rquiredproducts">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title"><i class="fa fa-exclamation-triangle"></i> Atención</h4>
						</div>
						<div class="modal-body">
							<div class="alert alert-danger alert-dismissable">
								<p>
									Necesita agregar productos
								</p>
							</div>
						</div>
						<div class="modal-footer clearfix">
							<a href="#" class="btn" data-dismiss="modal">Aceptar</a>
						</div>
					</div><!-- /.modal-content -->
            	</div><!-- /.modal-dialog -->
			</div>
		</div>
	</section>
	<!-- /.content -->
</aside>
<!-- /.right-side -->
</div>
<!-- ./wrapper -->