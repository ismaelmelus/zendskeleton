<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

/**
 * AQUI MANEJAMOS TODAS LA FUNCIONALIDADES DE LOS CONTROLADORES, PARAMETROS DE LA URL, LAYOUTS, ETC.....
 * @author ismael
 */

namespace Newapplication;

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Newapplication\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'newapplication' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/newapplication',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Newapplication\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action[/:id/:id2]]]',
                        		//'route'    => '/[:controller[/:action]]', Le digo que cuando pase el parametro id esta ok
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            		//Le digo que cuando ha paso el parametro id está asociado al controlador galileo y ademas digo que tiene que ser de 0 a 9
                            		'__NAMESPACE__' => 'Newapplication\Controller',
                            		'controller'    => 'galileo',
                            		'action'        => 'index',
                            		'id'			=>	'[0-9]*',
                            		'id2'			=>	'[a-z]*',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'factories' => array(
            'translator' => 'Zend\Mvc\Service\TranslatorServiceFactory',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Newapplication\Controller\Index' => Controller\IndexController::class,
        		'Newapplication\Controller\Galileo' => Controller\GalileoController::class,
        		'Newapplication\Controller\Arduino' => Controller\ArduinoController::class,
        		'Newapplication\Controller\Newlayout' => Controller\NewlayoutController::class
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
        	'layout/newlayout'        => __DIR__ . '/../view/layout/newlayout.phtml',
            'newapplication/index/index' => __DIR__ . '/../view/newapplication/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
    		//Aquí he añadido newapplication=> para crear un array asociativo, aunque no hace falta
        'template_path_stack' => array(
            'newapplication'=> __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
