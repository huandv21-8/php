<?php
$name = $email = $pass = '';
if (isset($_GET['username'])) {
    $name = $_GET['username'];
}
if (isset($_GET['email'])) {
    $email = $_GET['email'];
}
if (isset($_GET['password'])) {
    $pass = $_GET['password'];
}
// if ($name != null && $email != null && $pass != null) {
//     header('Location: input.php?username=' . $name . '&email=' . $email . '&password=' . $pass);
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>


    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <?= $name ?> </td>
                    <td><?= $email ?></td>
                    <td><?= $pass ?> <a  href="input.php" style="color: red;"> edit</a> </td>
                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>