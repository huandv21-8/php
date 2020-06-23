<?php
// $link = $title = $price = $percent = $tr = '';
// if (!empty($_POST)) {
// 	if (isset($_POST['link'])) {
// 		$link = $_POST['link'];
// 	}
// 	if (isset($_POST['title'])) {
// 		$title = $_POST['title'];
// 	}
// 	if (isset($_POST['price'])) {
// 		$price = $_POST['price'];
// 	}
// 	if (isset($_POST['percent'])) {
// 		$percent = $_POST['percent'];
// 	}
// 	$tr .= '<tr>' .
// 		'<td>' . $link . '</td>' .
// 		'<td>' . $title . '</td>' .
// 		'<td>' . $price . '</td>' .
// 		'<td>' . $percent . '</td>' .
// 		'</tr>';

// }
$a =$b=$c=$d=$tr='';

if (isset($_COOKIE['link'])) {
	$a = $_COOKIE['link'];
}
if (isset($_COOKIE['title'])) {
	$b = $_COOKIE['title'];
}
if (isset($_COOKIE['price'])) {
	$c = $_COOKIE['price'];
}
if (isset($_COOKIE['percent'])) {
	$d = $_COOKIE['percent'];
}

$tr .= '<tr>' .
		'<td>' . $a . '</td>' .
		'<td>' . $b . '</td>' .
		'<td>' . $c . '</td>' .
		'<td>' . $d . '</td>' .
		'</tr>';
		header('Location: welcome.php');
        die();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

	<div class="container">
		<h2 style="text-align: center;">Sản phẩm trong giỏ hàng</h2>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Tiêu đề</th>
					<th>Link Hình Ảnh</th>
					<th>Giá Bán</th>
					<th>Phần Trăm Trả Góp</th>
				</tr>
			</thead>
			<tbody>
				<?= $tr ?>
			</tbody>
		</table>
	</div>
</body>

</html>