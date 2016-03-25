<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
//use Application\Model\Entity\Modelo;
use Application\Form\Formulario;
use Application\Model\Entity\Procesadatosformulario;


class FormularioController extends AbstractActionController
{
	
	public function __construct(){
		
	}
    public function indexAction()
    {
        return new ViewModel();
    }

    public function formularioAction(){
    	
    	$form = new Formulario("Mi_formulario");
<<<<<<< HEAD
    	
=======
    	$form ->get('selectvacio')->setValueOptions(array('0'=>'Op0','1'=>'Op1','3'=>'Op3'));
    	$form ->get('oculto')->setAttribute("value","0");
    	$form ->get('mcheck')->setValueOptions(array('0'=>'Op0','1'=>'Op1','3'=>'Op3'));
>>>>>>> 1ee0309ced54db0a77c33a684ea9e4c2c4eaf543
    	return new ViewModel(array('texto'=>"Formulario en ZendFramework",'form' => $form,'url'=> $this->getRequest()->getBaseUrl()));
    }
    
    public function recibeAction()
    {
    	$data = $this->request->getPost();
    	$procesa = new Procesadatosformulario($data);
    	$datos = $procesa->getData();
    	return new ViewModel(array('datos' => $datos));
    }
    
    
}
