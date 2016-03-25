<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

/**
 * Vamos a crear un metodo por cada una de las vistas que vamos a utilizar
 * o tambien para cada procedimiento que queramos ejecutar
 * 
 * @authorismael
 * 
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class RaspberryController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function otraAction()
    {
    	return new ViewModel();
    }
    
    public function recibeparametrosAction()
    {    	
    	 $saludo = ("mensaje para ver el paso de parametros");
    	 $miarray=array("ismael","alkhalaf","melus");
    	 return new ViewModel(array('saludo'=>$saludo,'segundo'=>'Otro parametro','unarray'=>$miarray));
    }
    
    public function valoresurlAction()
    {
    	$id = (int) $this->params()->fromRoute("id",null);
    	$id2 = (string) $this->params()->fromRoute("id2",null);
    	//No funciona capturar la url
    	$url = $this->getRequest()->getBaseUrl();
    	$titulo = "Valores URL";
    	return new ViewModel(array('titulo'=>$titulo,'id'=>$id,'id2'=>$id2,'url'=>$url));
    }
    
    public function redireccionarAction()
    {
    	return $this->redirect()->toUrl($this->getRequest()->getBaseUrl().'/application/arduino/index');
  
    }
    //caragar otra vista sin recargar la pagina
    public function cargaotravistaAction()
    {
    	return $this->forward()->dispatch('\Application\Controller\Galileo', array('action' => 'otra'));
    
    }
    //llamada a render para recargar pagina sin hacer forward
    public function conrenderAction()
    {
    	//Renders  application/galileo/conrender.phtml
    	$view = new ViewModel();
    	return $view;
	}
	
	public function datatempAction()
	{
		return new ViewModel();
	}
}
