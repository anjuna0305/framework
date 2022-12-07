<?php
/**
 * home controller
 */
class Home extends Controller
{
	
	function index($id=100)
	{
		// code...
		echo $this->view('home');

	}
}

