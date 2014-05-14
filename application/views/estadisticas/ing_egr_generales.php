<aside class="right-side">
	<section class="content-header">
		<h1>Ingresos y Egresos Generales<small>Consultar</small></h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url();?>">Home</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>estadisticas">Estadísticas</a>
			</li>
			<li class="active">Ingresos y Egresos Generales</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<!--<h3 class="box-title">Lista <small>de Productos</small></h3>-->
						
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-lg-5">
								<div class="form-group">
									<label class="col-lg-3 control-label" for="anio">Año</label>
									<div class="col-lg-9">															
										<select id="anio" name="anio" class="form-control  validate[required]" >
											<option value="1">2001</option>
											<option value="2">2002</option>
											<option value="3">2003</option>
										</select>														
									</div>
								</div>
							</div>
							<div class="col-lg-4">								
								<div class="form-group">
									<label class="col-lg-3 control-label" for="estado">Mes</label>
									<div class="col-lg-9">															
										<select id="mes" name="mes" class="form-control  validate[required]" >
											<option value="1">Enero</option>
											<option value="2">Febrero</option>
											<option value="3">Marzo</option>
										</select>														
									</div>
								</div>	
							</div>
							<div class="col-lg-3">	
								<button id="btn-rpt-ingegrgen" type="button" class="col-lg-12 btn btn-success btn-flat" >Reporte</button>
							</div>
						</div></br>
						<div class="form-horizontal">
							<legend>REPRESENTACIÓN GRÁFICA</legend>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="box-header">
								    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
								    <script type="text/javascript">
								      google.load("visualization", "1", {packages:["corechart"]});
								      google.setOnLoadCallback(drawChart);
								      function drawChart() {
								        var data = google.visualization.arrayToDataTable([
								          ['Year', 'Ingresos', 'Egresos'],
								          ['2004',  1000,      400],
								          ['2005',  1170,      460],
								          ['2006',  660,       1120],
								          ['2007',  1030,      540]
								        ]);

								        var options = {
								          title: 'Ingresos y Egresos Generales'
								        };

								        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
								        chart.draw(data, options);
								      }
								    </script>

								</div>
								<div class="col-lg-6 col-lg-offset-1 control-label">
									<div class="modal-body">
										 <div id="chart_div" style="width: 900px; height: 500px;">
										 </div>
									</div>
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











