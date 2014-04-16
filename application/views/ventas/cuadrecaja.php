<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Cuadre de Caja
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li><a href="<?php echo base_url();?>ventas">Ventas</a></li>
            <li class="active">Cuadrar Caja</li>
        </ol>
    </section>
        <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">                  
                        <form id="InicieCajaForm" class="form-horizontal" >
                        <div class="row">
                            <div class="form-horizontal col-lg-12 col-lg-offset-0"><!--6-2-->
                                <legend>CUADRAR CAJA</legend>
                              
                                <div class="form-group">
                                    <label class="col-lg-5 control-label" for="valor">Saldo Final</label>
                                    <div class="col-lg-3">
                                        <div class="input-group">
                                            <input value="<?php echo $cuadrecaja["SaldoFinal"]; ?>" class="form-control validate[required,custom[onlyNumberSp]]" id="importe" name="saldofinal" type="text" data-prompt-position="topLeft" readonly>
                                            <span class="input-group-addon">0.0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-5 control-label" for="valor">Saldo Final en Caja</label>
                                    <div class="col-lg-3">
                                        <div class="input-group">
                                            <input class="form-control validate[required,custom[onlyNumberSp]]" id="importe" name="saldofinalcaja" type="text" data-prompt-position="topLeft">
                                            <span class="input-group-addon">0.0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-5 control-label" for="valor">Saldo Faltante/Sobrante</label>
                                    <div class="col-lg-3">
                                        <div class="input-group">
                                            <input class="form-control validate[required,custom[onlyNumberSp]]" id="importe" name="saldofaltsob" type="text" data-prompt-position="topLeft">
                                            <span class="input-group-addon">0.0</span>
                                        </div>
                                    </div>
                                </div>
                            </br>
                                <div class="col-lg-4 col-lg-offset-1">
                                </div>
                                <div class="col-lg-3">  
                                    <button id="Cuadrar_caja" type="button" class="col-lg-12 btn btn-info btn-flat btn-abrirc">CUADRAR CAJA</button>
                                </div>
                        </br>
                        </br>
                            </div>
                </div>
            </div>  
        </div>
    </section>
</aside>
</div>





