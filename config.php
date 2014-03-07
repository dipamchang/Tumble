<?php
  
	// routes url to controller and view
	$routes = array(
		               array('url' => '/^posts\/(?P<id>\d+)$/', 'controller' => 'posts', 'view' => 'show'),
									 array('url' => '/^posts\/(?P<id>\d+)\/edit$/', 'controller' => 'posts', 'view' => 'edit'),
									 array('url' => '/^posts\/new$/', 'controller' => 'posts', 'view' => 'new'),
									 array('url' => '/^posts\/create$/', 'controller' => 'posts', 'view' => 'create')
		             );
	
	// Database connection params
	define('HOST', 'localhost');
	define('USERNAME', 'leighmac');
	define('PASSWORD', 'password');
	define('DATABASE', 'tumblelog');


  // The server root
	define('SERVER_ROOT', $_SERVER['DOCUMENT_ROOT']);
	
	// Directory structure
	define('DS', '/');
	
  // Application Directory - need to change this to your app folder.
	define('APP_ROOT', 'tumblelog');

	// MVC paths
	define('MODEL_PATH', SERVER_ROOT.APP_ROOT.DS.'models'.DS);
	define('VIEW_PATH', SERVER_ROOT.APP_ROOT.DS.'views'.DS);
	define('CONTROLLER_PATH', SERVER_ROOT.APP_ROOT.DS.'controllers'.DS);

	// lib includes
	include('database.php');
 

?>
