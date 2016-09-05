<?php 
	class OperarioController extends BaseController { 

		public function mostrar(){
			$operarios = Operario::all();
			return View::make('operarios.listado', array('operarios' => $operarios) );
		}

		public function formulario(){
			$estado = Estado::all();
			$tipousuarios = TipoUsuario::all();
			$tipodocumentos = TipoDocumento::all();
			return View::make('operarios.formulario', array('estado'=>$estado, 'tipousuario'=>$tipousuarios,'tipodocumento'=>$tipodocumentos));

		}

		public function guardar(){
			$datos['numero_identidad'] = Input::get('numero_identidad');
			$datos['nombre'] = Input::get('nombre');
			$datos['apellido'] = Input::get('apellido');
			$datos['tipo_usuario'] = Input::get('tipo_usuario');
			$datos['idestado'] = Input::get('idestado');
			$datos['idtipo_documento'] = Input::get('idtipo_documento');

			Operario::create($datos);

			return Redirect::to('operarios')->with('mensaje', 'Registro Insertado!');
		}

		public function eliminar($id){
			
			$operario = Operario::find($id);
			try {
				$operario->delete();
			} catch (Exception $e) {

			
			return Redirect::to('operarios')->with('mensaje4', 'El registro no pudo ser eliminado!');

				
			}

			


			return Redirect::to('operarios')->with('mensaje2', 'Registro Eliminado!');

		}

		public function obtener($id){

			$operario = Operario::find($id);

			return View::make('operarios.editar', ['operario' => $operario]);
		}

		public function actualizar($id){

			$operario = Operario::find($id);

			$operario->nombre = Input::get('nombre');

			$operario->save();

			return Redirect::to('operarios')->with('mensaje3', 'Registro Editado!');
		}

	}


?>





