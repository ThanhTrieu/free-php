<?php 
namespace App\Controller;

if(!defined('ROOT_PATH')){
	// defined : kiem tra su ton tai cu hang so
	die('can not access');
	// die : dung chuong trinh lai
}

// ke thua file Controller mau(goc)
require 'app/controller/Controller.php';
use App\Controller\Controller;

class TestController extends Controller
{
	public function index()
	{
		# code...
	}
}