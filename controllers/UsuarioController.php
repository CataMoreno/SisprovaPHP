<?php 
	class UsuarioController extends BaseController { 

		public function mostrar(){
			$usuarios = Usuario::all();
			return View::make('usuarios.listado', array('usuarios' => $usuarios) );
		}

		public function formulario(){

			$centros = Centro::all();
			$estados = Estado::all();
			$tipousuarios = TipoUsuario::all();
			$tipodocumentos = TipoDocumento::all();
			return View::make('usuarios.formulario',['tipodocumentos' => $tipodocumentos,'tipousuarios' => $tipousuarios,'estados' => $estados,'centros'=> $centros]);
			return View::make('usuarios.formulario',['tipousuarios' => $tipousuarios,'estados' => $estados,'centros'=> $centros]);
			return View::make('usuarios.formulario',['estados' => $estados,'centros'=> $centros]);
			return View::make('usuarios.formulario',['centros' => $centros]);


            
		}

		public function guardar(){
			$datos['nombre'] = Input::get('nombre');
			$datos['apellido'] = Input::get('apellido');
			$datos['numero_identidad'] = Input::get('numero_identidad');
			$datos['foto'] = Input::get('foto');
			$datos['huella'] = Input::get('huella');
			$datos['usuario'] = Input::get('usuario');
			$datos['contraseña'] = Input::get('pass');
			$datos['idcentro'] = Input::get('centro');
			$datos['idtipousuario'] = Input::get('tipousuario');
			$datos['idestado'] = Input::get('estado');
			$datos['idtipodocumento'] = Input::get('documento');
			$datos['edad'] = Input::get('edad');
			$datos['fecha_nacimiento'] = Input::get('fecha_nac');
			$datos['telefono'] = Input::get('telefono');
			$datos['direccion'] = Input::get('direccion');


			Usuario::create($datos);

			return Redirect::to('usuarios');
		}

		public function eliminar($id){
			
			$usuarios = Usuario::find($id);

			$usuarios->delete();

			return Redirect::to('usuarios');

		}

		public function obtener($id){

			$usuario = Usuario::find($id);
			$centros = Centro::all();
			return View::make('usuarios.editar', ['usuario' => $usuario ,'centros' => $centros]);
			
		}

		public function actualizar($id){

			$materia = Materia::find($id);
			$materia->nombre = Input::get('nombre');
			$materia->jornada = Input::get('jornada');
			$materia->dias = implode(',', Input::get('dias'));
			$materia->id_profesor = Input::get('profesor');
			$materia->save();

			return Redirect::to('materias')->with('mensaje3', 'Registro Editado!');
		}
  }
?>





