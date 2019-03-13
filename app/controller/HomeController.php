<?php
namespace App\Controller;
// namespace : dinh danh 1 ten goi cho lop

if(!defined('ROOT_PATH')){
	// defined : kiem tra su ton tai cu hang so
	die('can not access');
	// die : dung chuong trinh lai
}

// nap model 
require 'app/model/HomeModel.php';
use App\Model\HomeModel;


class HomeController 
{
	private $home;
	public function __construct()
	{
		// magic method
		// no la phuong thuc dc chay dau tien khi khoi tao doi tuong cho class
		$this->home = new HomeModel;
	}

	public function index()
	{
		//echo "Hello you";
		$data = $this->home->getInfoDataST();
		require 'app/view/home/index_view.php';
	}
}

// tao ra 1 doi tuong cho class de co the truy cap vao cac phuong thuc nam trong class
$m = $_GET['m'] ?? 'index';
$home =new HomeController;
$home->$m();