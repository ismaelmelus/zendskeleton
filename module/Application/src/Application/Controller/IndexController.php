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
use Application\Model\Entity\Modelo;


class IndexController extends AbstractActionController
{
	
	public function __construct(){
		
	}
    public function indexAction()
    {
        return new ViewModel();
    }

    public function modelAction(){
    	
    	$modelo = new Modelo("Envío texto desde el controller al modelo y luego lo devuelvo y lo muestro");
    	$text = $modelo->getText();
    	$a = $modelo->getArray();
    	$desdemodelo = $modelo->desdeElController();
    	
    	return new ViewModel(array('texto'=>$text,'miarray'=>$a,'desdemodelo'=>$desdemodelo));
    }
    
    
}
