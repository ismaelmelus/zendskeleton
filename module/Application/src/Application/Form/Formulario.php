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
<<<<<<< HEAD
		
=======

		//Radio
		$radio = new Element\Radio('gender');
		$radio->setLabel('What is your gender ? ');
		$radio->setValueOptions(array(
				'0' => 'Female',
				'1' => 'Male',
		));
		
		$this->add($radio);
		
		//Select
		$select = new Element\Select('language');
		$select->setLabel('Which is your mother tongue?');
		$select->setValueOptions(array(
				'0' => 'French',
				'1' => 'English',
				'2' => 'Japanese',
				'3' => 'Chinese',
		));
	
		$this->add($select);
		
		
		//Select vacio y cargar datos desde la bbdd o desde el controlador
		$selectvacio = new Element\Select('selectvacio');
		$selectvacio->setLabel('Which is your mother tongue in selectvacio?');
		$selectvacio->setEmptyOption('Seleccione.....');
		$selectvacio->setAttribute('multiple', true);
		$this->add($selectvacio);
		
		//Campo oculto
		$oculto = new Element\Hidden('oculto');
		$this->add($oculto);
		
		
		
		//Checkbox
		$check = new Element\Checkbox('check');
		$check->setLabel('Marca el check');
		$this->add($check);
		
		//MultiCheckbox
		$mcheck = new Element\MultiCheckbox('mcheck');
		$mcheck->setLabel('Marca los checks');
		$this->add($mcheck);
		
		
		
		//Select Multiple
		$multiple = new Element\Select('multiple');
	     $multiple->setLabel('Which is your mother tongue?');
	     $multiple -> setAttribute('multiple', true) ;
	     $multiple->setValueOptions(array(
	      'european' => array(
	         'label' => 'European languages',
	         'options' => array(
	            '0' => 'French',
	            '1' => 'Italian',
	         ),
	      ),
	      'asian' => array(
	         'label' => 'Asian languages',
	         'options' => array(
	            '2' => 'Japanese',
	            '3' => 'Chinese',
	         ),
	      ),
	     ));
	     $this->add($multiple);
		

		// Single file upload
		$file = new Element\File('image-file');
		$file->setLabel('Multiple file input')
			 ->setAttribute('id', 'image-file');
		$this->add($file);
		
		
			
>>>>>>> 1ee0309ced54db0a77c33a684ea9e4c2c4eaf543
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
		
<<<<<<< HEAD
		
		
		
		
		
		
		
		
	}
	
	
	

	
=======
		$pass = $factory->createElement(array(
				'type' => 'Zend\Form\Element\Password',
				'name' => 'pass',
				'options' => array(
						'label' => 'Password:'." ",
				),
				'attributes' => array(						
						'value' => 'Escribe tu password',
						'class' => 'input'
				),
		));
		$this->add($pass);	
		
	}
>>>>>>> 1ee0309ced54db0a77c33a684ea9e4c2c4eaf543
}