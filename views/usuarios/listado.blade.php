@extends('plantilla')

@section('contenido')
<h1>USUARIOS</h1>
     <div class="header">
        <ul class="header-dropdown m-r--5">
            <li class="dropdown">
	            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	           	 <i class="material-icons">more_vert</i>
	            </a>
	             <ul class="dropdown-menu pull-right">
		            <li><a href="crearUsuarios">Agregar Usuarios</a></li>
	            </ul>
            </li>
        </ul>
     </div>
<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
     <thead>
         <tr>
         	 <th>ID</th>
             <th>NOMBRE</th>
             <th>DOCUMENTO</th>
             <th>CENTRO</th>
             <th>EDAD</th>
             <th>TIPO USUARIO</th>
             <th>ESTADO</th>
             <th colspan="2">OPERACIONES</th>
         </tr>
    </thead>
    <tbody>
		@foreach( $usuarios as $usuario)
			<tr>
				<td>{{ $usuario->id }}</td>
				<td>{{ $usuario->nombre }}</td>
				<td>{{ $usuario->numero_identidad }}</td>
		        <td>{{ $usuario->Centro->abreviatura }}</td>
				<td>{{ $usuario->edad}}</td>
				<td>{{ $usuario->tipoUsuario->nombre}}</td>
				<td>{{ $usuario->estado->nombre}}</td>
				<td>
					<a href="editarusuario/{{ $usuario->id}}" class="btn btn-default">
						<i class="material-icons">create</i>
					</a></td>
				<td>
					<a href="eliminarusuario/{{ $usuario->id }}" class="btn btn-default">
						<i class="material-icons">delete</i>
					</a></td>
			</tr>
		@endforeach
		</tbody>
	</table>
                              

@stop()





