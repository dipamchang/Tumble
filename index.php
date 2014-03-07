<?php

  // Holds the configuration for app, CONSTANTS ect...
	// Good idea to look inside.
	// * change the directory of your app in here
	// * edit your routes in here.
	// * edit database params in here.
	include('config.php');
	
  function dispatcher($routes)
  {
     // Requested URL
	  $url = $_SERVER['REQUEST_URI'];
	
	  // Removes Apllication root from url
	  $url = str_replace('/'.APP_ROOT.'/', '', $url);
		
		// holds the named captures, $_POST data
	  $params = parse_params();
		
		// Removes query string from $url we don't need it anymore affect routes.
		$url = str_replace('?'.$_SERVER['QUERY_STRING'], '', $url);
		
		//  becomes true if $route['url'] matches $url
	  $route_match = false;	
	  
		// loops over $routes looking for a match
		foreach($routes as $urls => $route)
	  {
			// if match found appends $matches to $params
			// sets $route_match to true and also exits loop.
		  if(preg_match($route['url'], $url, $matches))
		  {
			  $params = array_merge($params, $matches);
			  $route_match = true;
		    	break;
		  }
	  }
		
		// if no route matched display error
		if(!$route_match) { exit('no route found'); }
		
		// include controller
	  include(CONTROLLER_PATH.$route['controller'].'.php');
		
		if(file_exists(VIEW_PATH.'layouts'.DS.$route['controller'].'.php'))
		{
				// includes controller layout
		    include(VIEW_PATH.'layouts'.DS.$route['controller'].'.php');
		}
		else
		{
			// include default layout
		  include(VIEW_PATH.'layouts'.DS.'application.php');
		}
		
	
	
  }

	dispatcher($routes);
	
	/**
	 * Return array of $_GET and $_POST data
	 * @return array
	 */
	function parse_params()
	{
	  $params = array();
		
		if (!empty($_POST))
		{
		  $params = array_merge($params, $_POST);
		}
		
	  if (!empty($_GET))
		{
		  $params = array_merge($params, $_GET);
		}
		
		return $params; 
	}
	
?>
