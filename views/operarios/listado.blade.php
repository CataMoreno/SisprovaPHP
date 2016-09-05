@extends('plantilla')

@section('contenido')

	<div class="header">
        <ul class="header-dropdown m-r--5">
            <li class="dropdown">
	            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	           	 <i class="material-icons">more_vert</i>
	            </a>
	             <ul class="dropdown-menu pull-right">
		            <li><a href="crearOperarios">Agregar Operario</a></li>
	            </ul>
            </li>
        </ul>
     </div>
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<th>ID</th>
			<th>IDENTIFICACIÓN</th>
			<th>NOMBRE</th>
			<th>APELLIDO</th>
			<th>ESTADO</th>
			<th>TIPO DE DOCUMENTO</th>
			<th>EDITAR</th>
			<th>ELIMINAR</th>
		</thead>

		<tbody>
			@foreach( $operarios as $operario)
				<tr>
					<td>{{ $operario->id }}</td>
					<td>{{ $operario->numero_identidad }}</td>
					<td>{{ $operario->nombre }} </td>
					<td>{{ $operario->apellido }} </td>
					<td>{{ $operario->estado->nombre }} </td>
					<td>{{ $operario->tipodocumento->descripcion }} </td>
					<td> 
						<a href="editaroperario/{{ $operario->id}}" class="btn btn-default">
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
						</a>
					</td>
					<td> 
						<a href="eliminaroperario/{{ $operario->id }}" class="btn btn-default">
							<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
						</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

@stop