@extends('principal')

@section('encabezado')
	<h2>Actualizar Usuario</h2>
@stop

@section('contenido')
	<form action="{{url('/actualizarPro')}}/{{$producto->id}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token() }}">
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" name="nombre" required value="{{$producto->nombre}}">
		</div>
		<div class="form-group">
			<label for="descripcion">Descripcion</label>
			<input type="text" class="form-control" name="descripcion" required value="{{$producto->descripcion}}">
		</div>
		<div class="form-group">
			<label for="estatus">Status:</label>
			<select name="estatus" class="form-control" required>
				<option value="">Status</option>
				@if($producto->estatus==0)
				<option value="0" selected>Activo</option>
				<option value="1">Inactivo</option>
				@else
				<option value="0">Activo</option>
				<option value="1" selected>Inactivo</option>
				@endif
			</select>
		</div>
		<input type="submit" class="btn btn-primary" value="Actualizar">
		<a href="{{url('/consultarProducto')}}" class="btn btn-danger">Cancelar</a>
	</form>
@stop
