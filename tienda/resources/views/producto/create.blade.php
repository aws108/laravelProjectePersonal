@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:20px">

	<div class="col-md-offset-3 col-md-6">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">
					<span class="glyphicon glyphicon-barcode" aria-hidden="true"></span> 
					Añadir producto
				</h3>
			</div>

			<div class="panel-body" style="padding:30px">
			
				<!--Abrir formulario-->
				<form action="{{ url('producto') }}" method="POST">
					 <!--Protección contra CSRF-->
					 {{ csrf_field() }} 
			
    
    				<div class="form-group">
    					<label for="nombre">Nombre</label>
    					<input type="text" name="nombre" id="nombre" class="form-control">
					</div>

					<div class="form-group">
						<!--Completa el input para el año -->
						<label for="categoria">Categoria</label>
						<br/>
						<input type="text" name="categoria" id="categoria" class="form-control">
					</div>

					<div class="form-group">
						<!--Completa el input para el año -->
						<label for="precio">Precio</label>
						<br/>
						<input type="text" name="precio" id="precio" class="form-control">
					</div>

					<div class="form-group">
						<!--Completa el input para el director -->
						<label for="cantidad">Cantidad</label>
						<br/>
						<input type="text" name="cantidad" id="cantidad" class="form-control">
					</div>

					<div class="form-group">
						<!--Completa el input para el poster -->
						<label for="imagen">Imagen</label>
						<br/>
						<input type="text" name="imagen" id="imagen" class="form-control">
					</div>

					<div class="form-group">
						<label for="resumen">Resumen</label>
    					<textarea name="resumen" id="resumen" class="form-control" rows="3"></textarea>
					</div>

					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
							Añadir producto
						</button>
					</div>
				<!--Cerrar formulario-->
				</form>

			</div>
		</div>
	</div>
</div>
@stop

