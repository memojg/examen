
@extends('principal')

@section('encabezado')
	<h2>Consultar Usuarios</h2>
@stop

@section('contenido')
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Fecha Nacimiento</th>
				<th>Correo</th>
				<th>Status</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($usuarios as $u)
				<tr>
					<td>{{$u->id}}</td>
					<td>{{$u->nombre}}</td>
					<td>{{$u->apellido}}</td>
					<td>{{$u->f_nacimiento}}</td>
					<td>{{$u->correo}}</td>
					<td>
						@if($u->status==0)
							Activo
						@else
							Inactivo
						@endif
					</td>
					<td>
						<a href="{{url('/actualizarUsuario')}}/{{$u->id}}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true">Editar</span></a>

						<a href="{{url('/eliminarUsuario')}}/{{$u->id}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove" aria-hidden="true">Eliminar</span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $usuarios->render() !!}
@stop








