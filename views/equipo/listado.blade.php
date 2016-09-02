@extends('plantilla')

@section('contenido')
							<div class="body table-responsive">			
                              <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NOMBRE</th>
                                        <th>DESCRIPCION</th>
                                        <th>SERIAL</th>
                                        <th>COLOR</th>
                                        <th>TIPO EQUIPO</th>
                                        <th>USUARIO</th>
                                        <th>ESTADO</th>
                                    </tr>
                                </thead>
                                <tbody>
                           @foreach( $equipos as $equipos)
								<tr>
									<td>{{ $equipos->id}}</td>
									<td>{{ $equipos->nombre}}</td>
									<td>{{ $equipos->descripcion}}</td>
									<td>{{ $equipos->serial}}</td>
									<td>{{ $equipos->color}}</td>
                                    <td>{{ $equipos->tipoequipo->nombre}}</td>
                                    <td>{{ $equipos->usuario->nombre}}</td>
                                    <td>{{ $equipos->estado->nombre}}</td>
                                    <td>
                    <a href="editarequipos" class="btn btn-default">
                        <i class="material-icons">create</i>
                    </a></td>
                <td>
                    <a href="eliminarequipos/{{ $equipos->id }}" class="btn btn-default">
                        <i class="material-icons">delete</i>
                    </a></td>
            </tr>
								</tr>
								@endforeach
                                </tbody>
                            </table>
                        </div>
                
@stop()







