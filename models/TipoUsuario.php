<?php 
	class TipoUsuario extends Eloquent { 
	
		protected $table = 'tipousuario'; 
		protected $fillable = array('nombre','descripcion'); 
		public $timestamps = false; 
	}

?>