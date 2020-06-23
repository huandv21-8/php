<?php
require_once('manage.php');
$acc = $pass = $option = '';
$check = false;
$userList[] = array();

$sql = 'select * from user';
$userList = select($sql);

if (!empty($_POST)) {
    if (isset($_POST['account'])) {
        $acc = $_POST['account'];
    }
    if (isset($_POST['pass'])) {
        $pass = $_POST['pass'];
    }

    if ($acc != '' && $pass != '') {
        # code...

        foreach ($userList as $user) {
            if ($acc == $user['account'] && $pass == $user['pass']) {
                $check = true;
            }
        }

        if ($check) {
            setcookie('style', 'success', time() + 100, '/');
            header('Location: book.php');
            die();
        } else {
            $option = '<p style="color:red;">User or password entered incorre</p>';
        }
    }
}

if (isset($_COOKIE['style']) && $_COOKIE['style'] == 'success') {
    header('Location: bo 
    
    ok.php');
    die();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Log in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <button type="submit" class="btn btn-primary" style=" text-align: center;">Login</button>
        <button type="submit" class="btn btn-primary" onclick="signup();">Signup </button></br>
        <?= $option ?>
        <div class="container" style="border: 1px solid red;">
            <div class="container">

                <form action="" class="was-validated" method="post">
                    <div class="form-group">
                        <label for="account">Account:</label>
                        <input type="text" class="form-control" id="account" placeholder="Enter account" name="account" required>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass" required>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember" required> Save login
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Check this checkbox to continue.</div>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    function signup() {
        window.open("register.php")
    }
</script>

</html>