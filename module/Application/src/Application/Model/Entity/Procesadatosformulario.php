<?php 


namespace Application\Model\Entity;
/**
 * @author  ismael
 * 
 * 
 * 
 */

class Procesadatosformulario{
	
	private $nombre;
	private $email;
	
	public function __construct($datos=array()){
		
		$this->nombre=$datos["nombre"];
		$this->email=$datos["email"];
	}

		public function getData(){
			$array=array($this->nombre,$this->email);
			return $array;
			
		}
	
}