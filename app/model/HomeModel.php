<?php
namespace App\Model;

if(!defined('ROOT_PATH')){
	// defined : kiem tra su ton tai cu hang so
	die('can not access');
	// die : dung chuong trinh lai
}

class HomeModel 
{
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