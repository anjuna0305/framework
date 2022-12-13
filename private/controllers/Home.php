<?php
/**
 * home controller
 */
class Home extends Controller
{
	
	function index()
	{
		// code...
		$user = new user;
		// $data=$user->find_all();

		$data = $user->where('firstName','chamathka');
		


		$this->view('home',['rows'=>$data]);

	}
}

