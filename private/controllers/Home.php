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
		$arr['firstName'] = 'chamathka';
		$arr['lastName'] = 'sukumali';
		$arr['userIndex'] = 5566222;
		$arr['email'] = 'siri@gmail.com';
		$arr['nic'] = 112233655;
		$arr['contact'] = '785566998';
		$arr['district'] = 453132;
		$arr['town'] = '13132';
		$arr['password'] = 'kkpp';

		// $data = $user->where('firstName', 'chamathka');
		$data = $user->insert($arr);
		$data2 = $user->where('firstName', 'chamathka');
		$user->delete(13132);
		$this->view('home', ['rows' => $data]);
		print_r($data2);
	}
}
