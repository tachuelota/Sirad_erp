<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Inicio/Cierre Caja
            <small></small>
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
                    <div class="box-body">                  
                        
                        <div class="row">
                            <div class="form-horizontal col-lg-6 col-lg-offset-2">
                                <div class="form-group">
                                    <label class="col-lg-4 control-label" for="nom_clase">Caja</label>
                                    <div class="col-lg-8">
                                        <div class="input-group">
                                            <input class="form-control " id="nom_clase" name="nom_clase" type="text" data-prompt-position="topLeft">
                                            <span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-4 control-label" for="fec-trabajador">Fecha </label>
                                    <div class="col-lg-8">
                                        <div class="input-group">                                                   
                                            <input type="text" placeholder="dd/mm/YYYY"  maxlength="10" title="Debe ingresar un formato de fecha correcto" class="form-control datepicker validate[required,custom[date]]" id="fechanacimiento" name="fechanacimiento" >
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-4 control-label" for="valor">Importe</label>
                                    <div class="col-lg-8">
                                        <div class="input-group">
                                            <input class="form-control validate[required,custom[onlyNumberSp]]" id="valor" name="valor" type="text" data-prompt-position="topLeft">
                                            <span class="input-group-addon"><i class="fa fa-link"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="from-group col-lg-offset-9">
                                        <button type="reset" class="btn btn-flat btn-default btn-cancelarprov" data-dismiss="modal">Cerrar</button>           
                                        <button id="btn-reg-iniceCierre" class="btn btn-flat btn-primary">Abrir</button>
                                        <!--<button id="btn-edit-constante" class="btn btn-flat btn-primary" style="display:none">Guardar</button>-->
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>
</aside>
</div>





