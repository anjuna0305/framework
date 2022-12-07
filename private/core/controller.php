<?php

/**
 * main controller class
 */
class Controller
{
	
	public function view($view,$data=array())
	{
		// code...
		
		extract($data);
		if(file_exists("../private/views/".$view.".view.php"))
		{
			require ("../private/views/".$view.".view.php");
		}else{
			require ("../private/views/404.view.php");
		}
	}
}