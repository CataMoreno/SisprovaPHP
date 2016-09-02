<?php

class EquipoController extends BaseController { 

		public function mostrar(){
			$equipos = Equipo::all();
			return View::make('equipo.listado',array('equipos' => $equipos));

		}

		public function formulario(){
			$usuarios = Usuario::all();
			$tipo_equipos= Tipo_equipo::all();
			$estados = Estado::all();
			return View::make('equipo.formulario',['Usuario' => $usuarios,'Tipo_equipo' => $tipo_equipos,'estado'=>$estados]);
		}

		public function guardar(){

			$datos['nombre'] = Input::get('nombre');
			$datos['descripcion'] = Input::get('descripcion');
			$datos['serial'] = Input::get('serial');
			$datos['color'] = Input::get('color');
			$datos['idtipo_equipo'] = Input::get('idtipo_equipo');
			$datos['idusuario'] = Input::get('idusuario');
			$datos['idestado'] = Input::get('idestado');

			Equipo::create($datos);

			return Redirect::to('equipos')->with('mensaje', 'Registro Insertado!');
		}

		public function eliminar($id){
			
			$equipos = Equipo::find($id);
			$equipos->delete();
			return Redirect::to('equipos');

		}

		public function obtener($id){

			$equipos = Equipo::find($id);
			$usuarios = Usuario::all();
			$tipoequipos = Tipoequipo::all();
			$estados = Estado::all();
			return View::make('equipo.editar',['equipo' => $equipos,'tipoequipo' => $tipoequipos,'estados'=>$estados]);
		}

		public function actualizar($id){
			$equipos = Equipo::find($id);
			$equipos['nombre'] = Input::get('nombre');
			$equipos['descripcion'] = Input::get('descripcion');
			$equipos['serial'] = Input::get('serial');
			$equipos['color'] = Input::get('color');
			$equipos['idtipo_equipo'] = Input::get('id_materia');
			$equipos['idusuario'] = Input::get('idusuario');
			$equipos['idestado'] = Input::get('idestado');
			$equipos->save();

			return Redirect::to('equipos')->with('mensaje3', 'Registro Editado!');
		}

	}

?>