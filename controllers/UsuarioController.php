<?php 
	class UsuarioController extends BaseController { 

		public function mostrar(){
			$usuarios = Usuario::all();
			return View::make('usuarios.listado', array('usuarios' => $usuarios) );
		}

		public function formulario(){

			$centros = Centro::all();
			$estados = Estado::all();
			return View::make('usuarios.formulario',['estados' => $estados,'centros'=> $centros]);
			return View::make('usuarios.formulario',['centros' => $centros]);
            
		}

		public function guardar(){
			$datos['id_estudiante'] = Input::get('id_estudiante');
			$datos['id_materia'] = Input::get('id_materia');
			$datos['prioridad'] = Input::get('prioridad');


			Horario::create($datos);

			return Redirect::to('horarios')->with('mensaje', 'Registro Insertado!');
		}
}
?>





