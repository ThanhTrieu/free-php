<?php if(!defined('ROOT_PATH')) die('Can not access'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo MVC</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1> Hello PHP !</h1>
	<table width="100%" border="1" cellpadding="0" cellspacing="0">
		<caption>Thong tin sinh vien</caption>
		<thead>
			<tr>
				<th>MSV</th>
				<th>Ten</th>
				<th>SDT</th>
				<th>Dia chi</th>
				<th>Gioi tinh</th>
				<th>Tien</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($data as $key => $item): ?>
			<tr>
				<td>
					<?= $item['id']; ?>
				</td>
				<td>
					<?= $item['name']; ?>
				</td>
				<td>
					<?= $item['phone']; ?>
				</td>
				<td>
					<?= $item['address']; ?>
				</td>
				<td>
					<?= ($item['gender'] == 1) ? 'Nam' : 'Nu'; ?>
				</td>
				<td>
					<?= number_format($item['money']); ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>