<?php if(!defined('ROOT_PATH')) die('Can not access'); ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?= $title; ?></title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="public/css/bootstrap.min.css">
		<link rel="stylesheet" href="public/css/style.css">

		<script type="text/javascript" src="public/js/jquery.min.js"></script>
		<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container-fluid box-content">
			<div class="navbar navbar-inverse navbar-static-top">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Q|U|I|Z</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="http://t3h.edu.vn/gioi-thieu">Trang chủ</a>
						</li>
						<li><a href="http://t3h.edu.vn/dao-tao-ngan-han/lap-trinh-web-php">Liên kết</a></li>
						<li><a href="http://t3h.edu.vn/dao-tao-ngan-han/lap-trinh-front-end-voi-html5-css3-jquery-bootstrap">Giới thiệu</a></li>
						<li><a href="http://t3h.edu.vn/lien-he">Liên hệ</a></li>
						<li>
							<a href="?c=test">Test-demo</a>
						</li>
						<li>
							<a href="?c=home">Quiz-home</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- /navbar -->
			<div class="col-md-1 column"></div>