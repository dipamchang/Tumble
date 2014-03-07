<?php

	/**
	 * connects to database server and selects database
	 * @return (bool) resource
	 */
	function db_connect()
	{
	  $connection = @mysql_connect(HOST,USERNAME,PASSWORD);
		if (!$connection)
	  {
	   return false;
	  } 
	  if(!mysql_select_db(DATABASE, $connection)) 
	  {
		  return false;
	  }
		
		return $connection;
	}

	
	/**
	 * turns mysql resource into array
	 * @param resource $result
	 * @return array 
	 */
  function result_to_array($result)
	{
	  $result_array = array();
		for ($i=0; $row = mysql_fetch_array($result) ; $i++)
		{
		   $result_array[$i] = $row; 
		}
		
		return $result_array;
	}
	
	
?>

