<aside class="right-side">
	<section class="content-header">
		<h1>Notificación<small>Productos</small></h1>
			<ol class="breadcrumb">
				<li>
					<a href="<?php echo base_url();?>">Home</a>
				</li>				
				<li class="active">Notificación de Productos</li>
			</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">						
						<h3 class="box-title">Productos con Stock minimo</h3>		
							<div class="box-tools pull-right">
								<form method="post" target="_blank" id="CreatePDFForm">
									<input type="hidden" name="title" id="title"/>
									<input type="hidden" name="table_productos" id="table_productos"/>
									<div>						
										<button type="button" class="btn btn-success btn-flat" id="xlsutton">Exportar</button>	
					          <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#compose-modal">Enviar</button>									       
									</div>
								</form>
							</div>
					</div>
					<div class="box-body">
						<form id="notificaciones">							
							<div class="form-horizontal box-content">								
								<table id="select_producto_table" class="table table-striped table-bordered bootstrap-datatable datatable" data-source="<?php echo base_url();?>mensajes/servicios/getProductos_minstock">
									<thead>
										<tr>
											<th>Codigo de Barra</th>
											<th>Producto</th>
											<th>Unidad de Medida</th>
											<th>Stock Actual</th>
											<th>Stock Minimo</th>
											<th>Stock Maximo</th>
										</tr>
									</thead>
									<tbody>
									</tbody>
								</table>
							
							</div>							
						</form>
					</div>
					<!-- Inicio de Modal-->
					<div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
			            <div class="modal-dialog">
			                <div class="modal-content">
			                    <div class="modal-header">
			                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                        <h4 class="modal-title"><i class="fa fa-envelope-o"></i>  Redactar nuevo mensaje</h4>
			                    </div>
			                    <form action="#" method="post">
			                        <div class="modal-body">
			                            <div class="form-group">
			                                <div class="input-group">
			                                    <span class="input-group-addon">TO:</span>
			                                    <input name="email_to" type="email" class="form-control" placeholder="Email TO">
			                                </div>
			                            </div>
			                            <div class="form-group">
			                                <div class="input-group">
			                                    <span class="input-group-addon">CC:</span>
			                                    <input name="email_to" type="email" class="form-control" placeholder="Email CC">
			                                </div>
			                            </div>
			                            <div class="form-group">
			                                <div class="input-group">
			                                    <span class="input-group-addon">BCC:</span>
			                                    <input name="email_to" type="email" class="form-control" placeholder="Email BCC">
			                                </div>
			                            </div> 
			                            <div class="form-group">
			                                <textarea name="message" id="email_message" class="form-control" placeholder="Message" style="height: 120px;" ></textarea>
			                            </div>
			                        </div>
			                        <div class="modal-footer clearfix">

			                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>

			                            <button type="submit" class="btn btn-primary pull-left"><i class="fa fa-envelope"></i> Enviar</button>
			                        </div>
			                    </form>
			                </div><!-- /.modal-content -->
			            </div><!-- /.modal-dialog -->
			        </div><!-- /.modal -->																						
				</div>
			</div>
		</div>
	</section>
</aside>
</div>
<!--/fluid-row-->