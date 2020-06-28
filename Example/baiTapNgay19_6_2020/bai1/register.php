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
    <title>Register</title>
</head>

<body>
    <div class="container">
        <button type="submit" class="btn btn-primary" style=" text-align: center;" onclick="login();">Login</button>
        <button type="submit" class="btn btn-primary">Signup </button>
        <div class="container" style="border: 1px solid red;">
            <div class="container">
                <form method="post" class="was-validated" action="">
                    <div class="form-group">
                        <label for="name">
                            <h6>Full name: </h6>
                        </label>
                        <input type="text" name="name" class="form-control" placeholder="Enter name" id="name" required>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="phone">
                            <h6>Phone: </h6>
                        </label>
                        <input type="text" name="phone" class="form-control" placeholder="Enter phone" id="phone" required>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="address">
                            <h6>Email: </h6>
                        </label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email" id="email" required>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="account">
                            <h6>Account: </h6>
                        </label>
                        <input type="text" name="account" class="form-control" placeholder="Enter account" id="account" required>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass" required>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <button type="submit" id="register" class="btn btn-primary">Signup</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
    $('#register').on('click', function() {
        var name = $('#name').val();
        var email = $('#email').val();
        var acc = $('#account').val();
        var pass = $('#pass').val();
        var phone = $('#phone').val();

        if (name == '' || email == '' || acc == '' || phone == '' || pass == '') {
            alert('Enter full data')
        } else {
            $.post('insertRegister.php', {
                name: name,
                email: email,
                phone: phone,
                acc: acc,
                pass: pass
            }, )

            alert('success');

            window.open('admin.php');
        }
    })

    function login() {
        window.open("login.php");
    }
</script>
<?php

?>

</html>