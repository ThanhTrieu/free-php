<?php
namespace App\Model;

if(!defined('ROOT_PATH')){
	// defined : kiem tra su ton tai cu hang so
	die('can not access');
	// die : dung chuong trinh lai
}

require 'app/config/database.php';
use App\Config\Database;
use \PDO;

class HomeModel extends Database
{
	public function __construct()
	{
		// chay dc construct cua class cha
		parent::__construct();
	}

	public function loadMoreDataQuestion($strId)
	{
		

		$data = []; // tao mang rong - muc dich se do du lieu vao day
		// lay ngau nhien 1 cau hoi trong database
		
		$ids = preg_split('/\s*,\s*/', $strId, -1, PREG_SPLIT_NO_EMPTY);
		$placeHolders = implode(', ', array_fill(0, count($ids), '?'));
		
		$sql = "SELECT * FROM questions AS a WHERE a.id NOT IN ($placeHolders) LIMIT 1";
		// kiem tra xem cau lenh sql co the thuc thi dc ko?
		$stmt = $this->db->prepare($sql);
		if($stmt){
			foreach ($ids as $index => $value) {
			    $stmt->bindValue($index + 1, $value, PDO::PARAM_INT);
			}
			// thuc thi lenh sql
			if($stmt->execute()){
				// tra ve 1 mang du lieu(mang don) voi key cua mang la cac truong nam trong database
				$data = $stmt->fetch(PDO::FETCH_ASSOC);
			}
			// dung lenh execute de co the thuc thi tiep cac lenh sql tiep theo neu co
			$stmt->closeCursor();
		}
		return $data;
	}

	public function checkingAnswerQuestion($idQuestion, $idAnswer)
	{
		// :questions_id : cu phap pdo php
		$check = 0;
		$data = [];
		$sql = "SELECT * FROM answers AS a WHERE a.id = :id AND a.questions_id = :questions_id LIMIT 1";
		$stmt = $this->db->prepare($sql);
		if($stmt){
			$stmt->bindParam(':id',$idAnswer, PDO::PARAM_INT);
			$stmt->bindParam(':questions_id',$idQuestion, PDO::PARAM_INT);
			// thuc thi cau lenh
			if($stmt->execute()){
				$data = $stmt->fetch(PDO::FETCH_ASSOC);
			}
			$stmt->closeCursor();
		}
		if($data){
			$check = $data['cheking'];
		}
		return $check;
	}

	public function getDataAnswerByIdQuestion($id)
	{
		$data = [];
		$sql  = "SELECT * FROM answers AS a WHERE a.questions_id = :id";
		$stmt = $this->db->prepare($sql);
		if($stmt){
			// kiem tra tham so truyen vao cau lenh sql
			$stmt->bindParam(':id',$id,PDO::PARAM_INT);
			// thuc thi cau lenh sql
			if($stmt->execute()){
				$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
			}
			$stmt->closeCursor();
		}
		return $data;
	}

	public function getDataRandomQuestion()
	{
		$data = []; // tao mang rong - muc dich se do du lieu vao day
		// lay ngau nhien 1 cau hoi trong database
		
		$sql = "SELECT * FROM questions ORDER BY RAND() LIMIT 1";
		// kiem tra xem cau lenh sql co the thuc thi dc ko?
		$stmt = $this->db->prepare($sql);
		if($stmt){
			// thuc thi lenh sql
			if($stmt->execute()){
				// tra ve 1 mang du lieu(mang don) voi key cua mang la cac truong nam trong database
				$data = $stmt->fetch(PDO::FETCH_ASSOC);
			}
			// dung lenh execute de co the thuc thi tiep cac lenh sql tiep theo neu co
			$stmt->closeCursor();
		}
		return $data;
	}

	public function getInfoDataST()
	{
		// tao 1 mang du lieu luu tru thong cua sinh vien
		// mang la 1 bien dac biet co the luu nhieu gia tri tai thoi diem ma no khai bao
		$students = [
			[
				'id' => 113, // id: key - 113 : value
				'name' => 'Nguyen Van A',
				'phone' => '09764579696',
				'address' => 'Ha Noi',
				'gender' => 1,
				'money' => 1500000
			],
			[
				'id' => 114, // id: key - 113 : value
				'name' => 'Nguyen Thi B',
				'phone' => '09764579696',
				'address' => 'Ha Noi',
				'gender' => 0,
				'money' => 1500000
			],
			[
				'id' => 115, // id: key - 113 : value
				'name' => 'Nguyen Thi D',
				'phone' => '09764579696',
				'address' => 'Bac Ninh',
				'gender' => 0,
				'money' => 2000000
			]
		];
		return $students;
	}
}