<?php
if (isset($_COOKIE['style']) && $_COOKIE['style'] == 'success') {
    header('Location: welcome.php');
    die();
}

$check_user = $check_pass = $option_check = $option_pass = $option_user = '';
if (!empty($_POST)) {
    if (isset($_POST['name'])) {
        setcookie('fullname', $_POST['name'], time() + 180, '/');
    }
    if (isset($_POST['address'])) {
        setcookie('address', $_POST['address'], time() + 180, '/');
    }
    if (isset($_POST['user'])) {
        setcookie('user', $_POST['user'], time() + 180, '/');
    }
    if (isset($_POST['pass'])) {
        setcookie('pass', $_POST['pass'], time() + 180, '/');
    }
}
if (!empty($_GET)) {
    if (isset($_GET['check-user']) && isset($_GET['check-pass'])) {
        if (($_COOKIE['user'] == $_GET['check-user']) && ($_COOKIE['pass'] == $_GET['check-pass'])) {
            setcookie('style', 'success', time() + 180, '/');
            header('Location: welcome.php');
            die();
        } else {
            $option_check = '<p style="color:red;">User or password entered incorre</p>';
        }
    } else {
        if ($_GET['check-user'] == '') {
            $option_user = '<p style="color:red;">Enter user to login</p>';
        }
        if ($_GET['check-pass'] == '') {
            $option_pass = '<p style="color:red;">Enter pass to login</p>';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>
    <?= $option_check ?>
    <div class="container">
        <form method="get">
            <div class="form-group">
                <label for="user">
                    <h6>Username:</h6> <?= $option_user ?>
                </label>
                <input type="text" required="true" name="check-user" class="form-control" placeholder="Enter username" id="check-user">
            </div>
            <div class="form-group">
                <label for="pass">
                    <h6>password: </h6><?= $option_pass ?>
                </label>
                <input type="password" required="true" name="check-pass" class="form-control" placeholder="Enter pass" id="check-pass">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

</body>

</html>