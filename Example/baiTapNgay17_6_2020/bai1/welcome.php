<?php
$name = '';
if (isset($_COOKIE['fullname'])) {
    $name = $_COOKIE['fullname'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Welcome to <?= $name ?></h2>
    <a name="" id="" class="btn btn-primary" href="logout.php" role="button">Log out</a>
</body>

</html>