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
<<<<<<< HEAD
=======
use Zend\Db\Adapter\Adapter;
use Zend\Db\Sql\Sql;
use Zend\Db\ResultSet\ResulSet;
>>>>>>> 1ee0309ced54db0a77c33a684ea9e4c2c4eaf543


class IndexController extends AbstractActionController
{
	
<<<<<<< HEAD
=======
	public $dbAdapter;
	
>>>>>>> 1ee0309ced54db0a77c33a684ea9e4c2c4eaf543
	public function __construct(){
		
	}
    public function indexAction()
    {
        return new ViewModel();
    }

<<<<<<< HEAD
    public function modelAction(){
    	
=======
    public function modelAction()
    {	
>>>>>>> 1ee0309ced54db0a77c33a684ea9e4c2c4eaf543
    	$modelo = new Modelo("Envío texto desde el controller al modelo y luego lo devuelvo y lo muestro");
    	$text = $modelo->getText();
    	$a = $modelo->getArray();
    	$desdemodelo = $modelo->desdeElController();
    	
    	return new ViewModel(array('texto'=>$text,'miarray'=>$a,'desdemodelo'=>$desdemodelo));
    }
    
    
<<<<<<< HEAD
=======
    public function morrislineAction()
    {
    	//Llamo a la vista index con el layout newlayout
    	$view = new ViewModel();
    	$this->layout('layout/datajasonlayout');
    	//saludo no funciona a traves del layout y title tampoco
    	
    	//CREAR MODELO DE DATOS Y PASARLO
    	
    	
    	$saludo = array(1=>"hola estoy pasando parametros a la vista a traves del layout");
    	$this->layout()->$saludo;
    	$this->layout()->$title="Mi nuevo title";
    	return $view;
    }
    
    //ZEND DB RESULTSET
    public function resultAction(){
    	$this->dbAdapter = $this->getServiceLocator()->get('Zend\Db\Adapter\Adapter');
    	$text = "Conexion a base de datos con ResulSet";
		$res= $this->dbAdapter->query("SELECT * FROM Heat",adapter::QUERY_MODE_EXECUTE);
		$result = $res->toArray();
    	return new ViewModel(array('texto'=>$text,'result'=>$result));
    }
    
    //ZEND DB SQL osea con métodos
    public function sqlAction(){
	
    	$this->dbAdapter = $this->getServiceLocator()->get('Zend\Db\Adapter\Adapter');
    	$sql = new Sql($this->dbAdapter);
    	$text = "Conexion a base de datos con Sql";
    	$select = $sql->select()
    				  ->from('Heat')
    				  ->where(array('id'=>2))
    				  ->order('id DESC');
    	//		$select->where(array('id' => 2));	
    	$selectString = $sql->buildSqlString($select);
		//     	echo $selectString;
    	$result = $this->dbAdapter->query($selectString, Adapter::QUERY_MODE_EXECUTE);
    
    	return new ViewModel(array('texto'=>$text,'result'=>$result));
    }
    
>>>>>>> 1ee0309ced54db0a77c33a684ea9e4c2c4eaf543
}
