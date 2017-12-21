@extends('principal')

@section('encabezado')
	<h2>Registar Proyecto</h2>
@stop

@section('contenido')
	<form action="{{url('/guardarProveedor')}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token() }}">
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" name="nombre" required>
		</div>
		<div class="form-group">
			<label for="rfc">RFC</label>
			<input type="text" class="form-control" name="rfc" required>
		</div>

		<div class="form-group">
			<label for="estatus">Estatus:</label>
			<select name="estatus" class="form-control" required>
				<option value="">Status</option>
				<option value="0">Activo</option>
				<option value="1">Inactivo</option>
			</select>
		</div>
				
		<input type="submit" class="btn btn-primary" value="Registrar">
		<a href="" class="btn btn-danger">Cancelar</a>
	</form>
@stop





