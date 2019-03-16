<?php 
namespace App\Config;
// day la noi ket noi toi csdl

if(!defined('ROOT_PATH')){
	// defined : kiem tra su ton tai cu hang so
	die('can not access');
	// die : dung chuong trinh lai
}

use \PDO; // su dung thu vien PDO

class Database 
{
	protected $db;
	public function __construct()
	{
		$this->db = $this->connection();
		// gan 1 bien bang ham ket noi csdl (tien su dung bien ket noi nay cho cac model du lieu sau nay)
	}

	protected function connection()
	{
		try {
		    $dbh = new PDO('mysql:host=localhost;dbname=quiz;charset=utf8', 'root', '');
		    return $dbh;
		    // tra ve bien ket noi
		} catch (PDOException $e) {
		    print "Error!: " . $e->getMessage() . "<br/>";
		    die();
		}
	}

	protected function disconnection()
	{
		$this->db = null;
	}

	public function __destruct()
	{
		$this->disconnection();
	}
}