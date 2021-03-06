@extends('template.dashboard-container')
@section('content')
	<div class="container">
			
		<div class="row">
			
			<div class="col-sm-12">
				<div class="row titulo-pantalla">
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                    	<span class="icon-tit_solicitud icon-tam2"></span> 
                    	{{$titulo_principal}}
                    </div>
                </div>
			</div>

		</div>
		<!-- seccion de la parte de los datos del usuaria logueado -->
		<div class="row">

				<div class="col-sm-5">
				    <div class="col-sm-12">
				        <div class="col-sm-3">
				            <div class="conten-img">
				                <img alt="User Pic" src="{{ $avatar }}" class="img-circle img-responsive img-profile">
				            </div>
				        </div>
				        <div class="col-sm-9">
				            <div class="conten-img-title">
				                USUARIO: {{ $usuario }}
				            </div>
				        </div>
				    </div>
				</div>
				
				<div class="col-sm-7"> <!-- seccion para agregar otra columna -->  </div>

		</div>

	</div>
	<br>
	<br>
	<!-- seccion del formulario y/o grid -->
	<div class="container-fluid">
		
		<div class="row">

			<form role="form" class="">
				<div class="col-sm-6">

				  <div class="form-group">
				    <label for="">RFC EMISOR</label>
				    <input type="text" class="form-control" id="emisor" name="data['emisor']" placeholder="Ingrese emisor">
				  </div>
					
				</div>
				<div class="col-sm-6">
				  
				  <div class="form-group">
				    <label for="">RFC RECEPTOR</label>
				    <input type="text" class="form-control" id="receptor" name="data['receptor']" placeholder="Ingrese Receptor">
				  </div>
					
				</div>
			</form>

		</div>

		<div class="row">

			<form role="form" class="">
				<div class="col-sm-6">

				  <div class="form-group">
				    <label for="">UUID</label>
				    <input type="text" id="uuid" name="data['uuid']" class="form-control" placeholder="Ingrese uuid" >
				  </div>
					
				</div>
				<div class="col-sm-6">
				  
				  <div class="col-sm-5">
				  		
					  <div class="form-group">
					    	<label for="">IMPORTE</label>
						  	<div class="input-group">
							    <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
							    <input id="importe"  name="data['importe']" type="text" class="form-control" placeholder="">
							</div>
					  </div>

				  </div>


					
				</div>
			</form>

		</div>

		<div class="row">
		
			<div class="pull-right">
				<button type="button" class="btn btn-warning btn-lg" onclick="agregar_comprobante()">Agregar</button>
			</div>

		</div>


	</div>


<script type="text/javascript" src="{{ asset('js/comprobantes/comprobantes.js') }}"></script>

@endsection