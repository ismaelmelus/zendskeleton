<?php
/**
 * 
 * @author ismael
 * 
 */

namespace Application\Model\Entity;


class Modelo {
	
	private $text;
	private $miarray;
	private $desdeFuera;
	
	public function __construct($valor){
		
		$this->text="Hola desde mi propiedad";
		$this->miarray=array();
		$this->desdeFuera=$valor;		
	}
	
	public function getText(){
		
		return $this->text;
	}
	
	private function cargaArray(){
		
		$a = array("gato","perro","vaca");
		$comma_separated = implode(",", $a);
		array_push($this->miarray,$comma_separated);
	}
	
	public function getArray(){
	
		self::cargaArray();
		return $this->miarray;
	}
	
	public function desdeElController(){
		
		return $this->desdeFuera;
	}
}