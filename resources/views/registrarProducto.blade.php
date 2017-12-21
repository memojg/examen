@extends('principal')

@section('encabezado')
	<h2>Resgitar Usuario</h2>
@stop

@section('contenido')
	<form action="{{url('/guardarProducto')}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token() }}">
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" name="nombre" required>
		</div>
		<div class="form-group">
			<label for="descripcion">Descripción</label>
			<input type="text" class="form-control" name="descripcion" required>
		</div>
		<div class="form-group">
			<label for="estatus">Status:</label>
			<select name="estatus" class="form-control" required>
				<option value="">Status</option>
				<option value="0">Activo</option>
				<option value="1">Inactivo</option>
			</select>
		</div>

		<input type="submit" class="btn btn-primary">
		<a href="{{url('/home')}}" class="btn btn-danger">Cancelar</a>
	</form>
@stop


