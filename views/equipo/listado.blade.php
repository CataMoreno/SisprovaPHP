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

								</tr>
								@endforeach
                                </tbody>
                            </table>
                        </div>
                
@stop()







