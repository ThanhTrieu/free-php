<?php 

// day la noi tiep nhan nhung request ma nguoi dung gui len
// quy uoc duong link ma nguoi dung se gui request len
// localhost/quiz?c=home&m=index
// ?c : truy cap vao controller
// &m : truy cap vao method tuong ung cua controller do
if(!defined('ROOT_PATH')){
	// defined : kiem tra su ton tai cu hang so
	die('can not access');
	// die : dung chuong trinh lai
}


// dinh nghia 1 class router
class Router 
{
	// public: pham vi truy cap cua 1 phuong thuc: public co nghia bat ki noi dau cung truy cap dc
	public function home()
	{
		// dieu huong vao controller co ten la home - (ngam hieu ten controller se trung ten cua phuong thuc trong router)
		// nap controller vao
		require 'app/controller/HomeController.php';
	}

	public function test()
	{
		require 'app/controller/TestController.php';
	}
}

// bat lay cac params ma nguoi dung gui len
// vi la router nen chi quan tam den param trieu goi vao controller (?c)
$c = $_GET['c'] ?? 'home';
//$c = isset($_GET['c']) ? $_GET['c'] : 'home';

// if(isset($_GET['c'])){
// 	$c= $_GET['c'];
// } else {
// 	$c = 'home';
// }

// khoi tao doi tuong cho class
$route = new Router;
// truy cap vao phuong thuc trong class
// () : thuc thi phuong thuc do
$route->$c();








