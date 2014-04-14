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
                        <form id="InicieCajaForm" class="form-horizontal" action-1="<?php echo base_url();?>ventas/inicie_caja/registrar">
                        <div class="row">
                            <div class="form-horizontal col-lg-12 col-lg-offset-0"><!--6-2-->
                                <legend>CAJA 1</legend>
                                <div class="form-group">
                                    <label class="col-lg-5 control-label" for="nom_caja">Caja</label><!--4-8-->
                                    <div class="col-lg-3">
                                        <div class="input-group">
                                            <input class="form-control " id="caja" name="caja" value="CAJA PRINCIPAL" readonly type="text" data-prompt-position="topLeft">
                                            <span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-5 control-label" for="fec-caja">Fecha </label>
                                    <div class="col-lg-3">
                                        <div class="input-group">                                                   
                                            <input type="text" placeholder="dd/mm/YYYY"  maxlength="10" title="Debe ingresar un formato de fecha correcto" class="form-control datepicker validate[required,custom[date]]" id="fecApertura" name="fecApertura" value="<?php echo date("d/m/Y"); ?>" >
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-5 control-label" for="valor">Importe</label>
                                    <div class="col-lg-3">
                                        <div class="input-group">
                                            <input class="form-control validate[required,custom[onlyNumberSp]]" id="importe" name="importe" type="text" data-prompt-position="topLeft">
<<<<<<< Updated upstream
                                            <span class="input-group-addon">0.0</span>
                                        </div>
                                    </div>
                                </div>
                            </br>
                                <div class="col-lg-4 col-lg-offset-4">
                                </div>
                                <div class="col-lg-2">  
                                    <button id="Abrir_caja" type="button" class="col-lg-12 btn btn-info btn-flat btn-abrirc">   Abrir</button>
                                </div>
                                <div class="col-lg-2">  
                                    <button id="Cerrar_caja" type="button" class="col-lg-12 btn btn-success btn-flat" >Cerrar</button>
                                </div>
                        </br>
                        </br>
                        </br>
                        </br>
                            </div>
                            <div class="form-horizontal col-lg-12 col-lg-offset-0"><!--6-2-->
                                <legend>CAJA 2</legend>
                                <!--<div class="form-group">
                                    <label class="col-lg-5 control-label" for="nom_caja">Caja</label>
                                    <div class="col-lg-3">
                                        <div class="input-group">
                                            <input class="form-control " id="nom_clase" name="nom_caja" type="text" data-prompt-position="topLeft">
                                            <span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-5 control-label" for="fec-caja">Fecha </label>
                                    <div class="col-lg-3">
                                        <div class="input-group">                                                   
                                            <input type="text" placeholder="dd/mm/YYYY"  maxlength="10" title="Debe ingresar un formato de fecha correcto" class="form-control datepicker validate[required,custom[date]]" id="fechanacimiento" name="fecha" >
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-5 control-label" for="valor">Importe</label>
                                    <div class="col-lg-3">
                                        <div class="input-group">
                                            <input class="form-control validate[required,custom[onlyNumberSp]]" id="importe" name="importe" type="text" data-prompt-position="topLeft">
=======
>>>>>>> Stashed changes
                                            <span class="input-group-addon"><i class="fa fa-link"></i></span>
                                        </div>
                                    </div>
                                </div>-->
                            </br>
                                <!--<div class="col-lg-4 col-lg-offset-4">
                                </div>
                                <div class="col-lg-2">  
                                    <button id="Abrir_caja" type="button" class="col-lg-12 btn btn-info btn-flat btn-abrirc">   Abrir</button>
                                </div>
                                <div class="col-lg-2">  
                                    <button id="Cerrar_caja" type="button" class="col-lg-12 btn btn-success btn-flat" >Cerrar</button>
                                </div>-->
                                
                            </div>
                        </div>
                    </form>
                    </div>  
                </div>
            </div>
        </div>
    </section>
</aside>
</div>





