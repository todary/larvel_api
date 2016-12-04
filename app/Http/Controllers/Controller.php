<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;



//	public function __construct()
//	{
//		parent::__construct();
//		if($this->ip_detector()!="::1"){
//			exit();
//		}
//	}
//	public function ip_detector(){
//		$ipaddress = '';
//		if (isset($_SERVER['HTTP_CLIENT_IP']))
//			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
//		else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
//			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
//		else if (isset($_SERVER['HTTP_X_FORWARDED']))
//			$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
//		else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
//			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
//		else if (isset($_SERVER['HTTP_FORWARDED']))
//			$ipaddress = $_SERVER['HTTP_FORWARDED'];
//		else if (isset($_SERVER['REMOTE_ADDR']))
//			$ipaddress = $_SERVER['REMOTE_ADDR'];
//		else
//			$ipaddress = 'UNKNOWN';
//		return $ipaddress;
//	}

}

