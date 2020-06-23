<?php 
if (isset($_COOKIE['status']) && $_COOKIE['status'] == 'success') {
    header('Location: welcome.php');
    die();
}


if (!empty($_POST)) {
	$CheckEmail = $CheckPassword = '';
    if (isset($_POST['fullname'])) {
        setcookie('fullname', $_POST['fullname'], time() + 300, '/');
    }
    if (isset($_POST['email'])) {
        setcookie('email', $_POST['email'], time() + 300, '/');
    }
    if (isset($_POST['address'])) {
        setcookie('address', $_POST['address'], time() + 300, '/');
    }
    if (isset($_POST['password'])) {
        setcookie('password', $_POST['password'], time() + 300, '/');
    }
    if (isset($_POST['confirmation_pwd'])) {
        setcookie('confirmation_pwd', $_POST['confirmation_pwd'], time() + 300, '/');
    }
    if (isset($_POST['CheckEmail']) && isset($_POST['CheckPassword'])) {
        if (($_COOKIE['email'] == $_POST['CheckEmail']) && ($_COOKIE['password'] == $_POST['CheckPassword'])) {
            setcookie('status', 'success', time() + 300, '/');
            header('Location: welcome.php');
            die();    
	}
}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Login</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					  <label for="usr">Email :</label>
					  <input required="true" type="email" class="form-control" id="usr" name="CheckEmail">
					</div>
					<div class="form-group">
					  <label for="pwd">Password:</label>
					  <input required="true" type="password" class="form-control" id="pwd" name="CheckPassword">
					</div>
					<button class="btn btn-success">Login</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>