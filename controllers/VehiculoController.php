<?php

class VehiculoController extends BaseController { 

		public function mostrar(){
			$vehiculos = Vehiculo::all();
			return View::make('vehiculo.listado',['usuario' => $usuario,'tipo_equipo' => $tipo_equipos,'estado'=>$estados,'marca'=>$marcas,'color'=>$colores]);
		}

public function formulario(){
			$usuarios = Usuario::all();
			$tipo_equipos= Tipo_vehiculo::all();
			$estados = Estado::all();
			$marcas= Marca::all();
			$colores = Color::all();
			return View::make('equipos.formulario',['Usuario' => $usuarios,'Tipo_equipo' => $tipo_equipos]);
		}

		public function guardar(){
			$datos['id_estudiante'] = Input::get('id_estudiante');
			$datos['id_materia'] = Input::get('id_materia');
			$datos['prioridad'] = Input::get('prioridad');


			Horario::create($datos);

			return Redirect::to('horarios')->with('mensaje', 'Registro Insertado!');
		}

		public function eliminar($id){
			
			$horarios = Horario::find($id);
			$horarios->delete();
			return Redirect::to('horarios')->with('mensaje2', 'Registro Eliminado!');

		}

		public function obtener($id){
			$horario = Horario::find($id);
			$estudiantes = Estudiante::all();
			$materias = Materia::all();
			return View::make('horarios.editar', ['horario' => $horario,'estudiantes'=>$estudiantes,'materias'=> $materias]);
		}

		public function actualizar($id){
			$horarios = Horario::find($id);
			$horarios['id_estudiante'] = Input::get('id_estudiante');
			$horarios['id_materia'] = Input::get('id_materia');
			$horarios['prioridad'] = Input::get('prioridad');
			$horarios->save();

			return Redirect::to('horarios')->with('mensaje3', 'Registro Editado!');
		}

	}

?>