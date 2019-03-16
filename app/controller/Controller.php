<?php 
namespace App\Controller;

class Controller 
{

	protected function loadHeader($header = [])
	{
		// load phan view header
		extract($header);
		$title = ($title) ?? 'Home - Quiz';
		// day 1 mang du lieu sang view va lay key cua mang do lam bien truyen ra ngoai view
		require 'app/view/common/header_view.php';
	}


	protected function loadFooter()
	{
		require 'app/view/common/footer_view.php';
	}

	protected function loadView($filePath, $data = [])
	{
		extract($data);
		require 'app/view/'.$filePath;
		// . Toan tu noi chuoi trong php (ghep 2 chuoi string thanh 1 chuoi)
	}
}