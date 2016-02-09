<?php 

/**
 * 
 * @author ismael 
 * 
 * 
 */

namespace Application\Form;

use Zend\Captcha\AdapterInterface as CaptchaAdapter;
use Zend\Form\Element;
use Zend\Form\Form;
use Zend\Captcha;
use Zend\Form\Factory;

class Formulario extends Form{
	
	
	public function __construct($name = null){
		
		parent::__construct($name);
		
		//Primera forma, Campo nombre
		$this->add(array(
				'name' => 'nombre',
					'options' => array(
						'label' => 'Nombre completo:'." ",
				),
				'attributes' => array(
						'type'  => 'text',
						'value' => 'Escribe tu nombre', 
						'class' => 'input'
				),
				));
		//Segunda forma , No me funciona
//		$name = new Element('name');
//		$name->setLabel('Your name');
//		$name->setAttributes(array(
//		    'type'  => 'text'
//		));
		
		//Tercera Forma , es la que más sea usa , campo email
		$factory = new Factory();
		$email = $factory->createElement(array(
				'type' => 'Zend\Form\Element\Email',
				'name' => 'email',
				'options' => array(
						'label' => 'Correo',
				),
				'attributes' => array(
						'value' => 'Escribe tu email',
						'class' => 'input'
				),
		));
		$this->add($email);		
	
		//Botón enviar
		$this->add(new Element\Csrf('security'));
		$this->add(array(
				'name' => 'send',
				'type'  => 'Submit',
				'attributes' => array(
						'value' => 'Submit',
						'title' => 'Enviar'
				),
		));
		
		
		
		
		
		
		
		
		
	}
	
	
	

	
}