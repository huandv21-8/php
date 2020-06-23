<?php
$name = $email = $pass = '';
if (!empty($_GET)) {
    if (isset($_GET['username'])) {
        $name = $_GET['username'];
    }
    if (isset($_GET['email'])) {
        $email = $_GET['email'];
    }
    if (isset($_GET['password'])) {
        $pass = $_GET['password'];
    }
    if ($name!=null&&$email!= null& $pass!= null) {
        header('Location: welcome.php?username='.$name.'&email='.$email.'&password='.$pass);
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        .container {
            border: 1px solid red;
            margin-top: 30px;
            border-radius: 10px;
        }

        .btn {
            width: 100px;
            background-color: rgb(111, 214, 216);
            background: red;
        }
    </style>
</head>

<body>
    <div class="container">

        <!-- method: get => $_GET => du lieu se duoc hien len url -->
        <!-- method: post => $_POST => du lieu se duoc an  -->

        <form method="$_GET">
            <div class="form-group">
                <label for="user">Username : </label>
                <input type="text" name="username" class="form-control" placeholder="Enter User name" id="user"
                 value="<?=$name?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email" id="email" 
                value="<?=$email?>">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd"
                value="<?=$pass?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>