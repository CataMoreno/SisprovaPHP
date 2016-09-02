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

		public function obtener(){

			$usuario = Usuario::all();
			$centros = Centro::all();
			$estados = Estado::all();
			$tipousuarios = TipoUsuario::all();
			$tipodocumentos = TipoDocumento::all();
			return View::make('usuarios.editar', ['usuario' => $usuario ,'centros' => $centros,'estados' => $estados,'tipousuarios' => $tipousuarios,'tipodocumentos' => $tipodocumentos]);
			
		}

		public function actualizar($id){

			$usuario = Usuario::find($id);
			$usuario->nombre = Input::get('nombre');
			$usuario->apellido = Input::get('apellido');
			$usuario->numero_identidad = Input::get('numero_identidad');
			$usuario->foto = Input::get('foto');
			$usuario->huella = Input::get('huella');
			$usuario->usuario = Input::get('usuario');
			$usuario->contrasena= Input::get('pass');
			$usuario->idcentro = Input::get('centro');
			$usuario->idtipousurio = Input::get('tipousuario');
			$usuario->idestado = Input::get('estado');
			$usuario->idtipodocumento = Input::get('documento');
			$usuario->edad = Input::get('edad');
			$usuario->fecha_nacimiento= Input::get('fecha_nac');
			$usuario->telefono = Input::get('telefono');
			$usuario->direccion = Input::get('direccion');
			$usuario->save();

			return Redirect::to('usuarios');
		}
  }
?>





