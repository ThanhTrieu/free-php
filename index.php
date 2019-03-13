<?php
if(file_exists('router/web.php')){
	// kiem tra xem 1 file co ton tai hay ko?
	/*
		comment tren nhieu dong
	 */
	
	// dinh nghia 1 hang so chi dinh duong dan thuc thi ung dung(duong dan den file goc index)
	// dung tu khoa define de dinh nghia hang so
	define('ROOT_PATH','index.php');

	// nhung file web.php vao day
	require_once 'router/web.php';

} else {
	echo "Website dang duoc nang cap, vui long quay lai sau";
}