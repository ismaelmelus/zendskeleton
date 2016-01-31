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

class NewlayoutController extends AbstractActionController
{
    public function indexAction()
    {
    	//Llamo a la vista index con el layout newlayout
       $view = new ViewModel();
       $this->layout('layout/newlayout');
       //saludo no funciona a traves del layout y title tampoco
       $saludo = array(1=>"hola estoy pasando parametros a la vista a traves del layout");
       $this->layout()->$saludo;
       $this->layout()->$title="Mi nuevo title";
       return $view;
    }
    
    public function ajaxAction()
    {
    	//Cuando trabajes con ajax , se recomienda no trabajar con el layout por defecto 
    	//y ademas utilizar setTerminal para cargar la vista sin Layout
    	$view = new ViewModel();
    	//$this->layout('layout/newlayout');
    	$view->setTerminal(true);
    	return $view;
    }

}
