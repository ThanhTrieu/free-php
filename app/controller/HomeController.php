<?php
namespace App\Controller;
// namespace : dinh danh 1 ten goi cho lop

if(!defined('ROOT_PATH')){
	// defined : kiem tra su ton tai cu hang so
	die('can not access');
	// die : dung chuong trinh lai
}

// ke thua file Controller mau(goc)
require 'app/controller/Controller.php';
use App\Controller\Controller;

// nap model 
require 'app/model/HomeModel.php';
use App\Model\HomeModel;


class HomeController extends Controller
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
		if(isset($_SESSION['idQuestions'])) {
			unset($_SESSION['idQuestions']);
		}
		$data = [];
		$data['question'] = $this->home->getDataRandomQuestion();
		$idQuestion = $data['question']['id'] ?? 0;
		$data['answers'] = $this->home->getDataAnswerByIdQuestion($idQuestion);

		// load header
		$header = [];
		$header['title'] = 'Demo OOP PHP - 123';
		$this->loadHeader($header);

		// load view - load content
		// ,$data : truyen du lieu ra view
		$this->loadView('home/index_view.php',$data);
		
		// load footer
		$this->loadFooter();
	}

	public function answerQuestion()
	{
		$idAnswer = $_POST['idAnswer'] ?? '';
		$idAnswer = is_numeric($idAnswer) ? $idAnswer : 0;

		$idQuestion = $_POST['idQuestion'] ?? '';
		$idQuestion = is_numeric($idQuestion) ? $idQuestion : 0;

		// xu ly kiem tra cau tra loi dung hay sai
		$anser = $this->home->checkingAnswerQuestion($idQuestion, $idAnswer);
		// tra ket qua ve cho view ajax
		echo $anser;
	}

	public function loadMoreQuestion()
	{
		$id = $_POST['id'] ?? '';
		$id = is_numeric($id) ? $id : 0;
		$_SESSION['idQuestions'][$id] = $id;
		
		// chuyen mang ve chuoi de xu ly
		$strId = implode(',', $_SESSION['idQuestions']);
		// id cua cau hoi da tung tra loi
		// luc load them du lieu thi khong lay no ra nua
	
		$data = [];
		$data['question'] = $this->home->loadMoreDataQuestion($strId);
		// lay ra cau tra loi tuong ung
		$idQuestion = $data['question']['id'] ?? 0;
		$data['answers'] = $this->home->getDataAnswerByIdQuestion($idQuestion);
		$this->loadView('home/index_view.php',$data);

	}
}

// tao ra 1 doi tuong cho class de co the truy cap vao cac phuong thuc nam trong class
$m = $_GET['m'] ?? 'index';
$home =new HomeController;
$home->$m();