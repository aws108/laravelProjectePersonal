@extends('layouts.master')

@section('content')

    <div class="row">

    <div class="col-sm-4">

        <img src="{{$produ['imagen']}}" style="height: 300px"/>

    </div>
    <div class="col-sm-8">

        <h2 style="min-height: 45px;margin: 5px 0 10px 0">
        	{{$produ['nombre']}}
		</h2>

		<h4 style="min-height: 45px;margin: 5px 0 10px 0">
        	Precio: {{$produ['precio']}}
		</h4>

		<h4 style="min-height: 45px;margin: 5px 0 10px 0">
        	Cantidad: {{$produ['cantidad']}}
		</h4>

		<h4 style="min-height: 45px;margin: 5px 0 10px 0">
        	<b>Resumen</b>: {{$produ['resumen']}}
		</h4>
		

		<!--si el producto está rented, le producto está agotado-->
		<?php if ("{$produ['rented']}"==0): ?>
			<h4 style="min-height: 45px;margin: 5px 0 10px 0"> </h4> 
			<p><b>Estado:</b> El producto está agotado</p> 
		<?php else: ?>
			<h4 style="min-height: 45px;margin: 5px 0 10px 0"> </h4> 
			<p><b>Estado: </b>Aún hay stock</p>
		<?php endif ?>
		
		<button type="button" class="btn btn-danger">Devolver un producto dañado</button>
	<button type="button" class="btn btn-warning" onclick="location.href='{{$produ['id']}}/edit'">
		<span class="glyphicon glyphicon-pencil"></span> Editar un producto</button>
	<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span>Volver al listado</button>
	
    </div>
</div>

@stop
