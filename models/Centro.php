<?php 
	class Centro extends Eloquent { 
	
		protected $table = 'centro'; 
		protected $fillable = array('nombre','abreviatura','descripcion','idcomplejo'); 
		public $timestamps = false; 

		public function complejo(){
			
			return $this ->belongsTo('Complejo','idcomplejo');
	     }
	    
	}


?>