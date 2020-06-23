<?php
require_once('manage.php');
$tr = '';
$product = '';

$bookList[] = array();
if (isset($_GET['no'])) {
    $d = $_GET['no'];

    $xoa = 'DELETE FROM book WHERE book.no =' . $d;
    insert_remove($xoa);
}


$hienthi = 'select * from book';
if (isset($_GET['search']) && $_GET['search'] != '') {
    $search = $_GET['search'];
    $hienthi = 'select * from book where name_book like "%' . $search . '%"';
}



$bookList = select($hienthi);
foreach ($bookList as $book) {

    if (isset($book['producer'])) {
        $product = $book['producer'];
    }

    $tr .= '<tr>' .
        '<td>' . $book['no'] . '</td>' .
        '<td>' . $book['name_book'] . '</td>' .
        '<td>' . $book['author'] . '</td>' .
        '<td>' . $book['price'] . '</td>' .
        '<td>' .  $product . '</td>' .
        '<td >' . '<a href="?no=' . $book['no'] . '"><button>Delete</button></a>' . '</td>' .
        '<td >' . '<button onclick=\'window.open("updatebook.php?no='. $book['no'].'","_self")\'>Update</button>' . '</td>' .
        '</tr>';
}

if (!empty($_POST)) {
    $namebook = $author = $price = $product = $insertbook = '';

    if (isset($_POST['namebook'])) {
        $namebook = $_POST['namebook'];
    }
    if (isset($_POST['author'])) {
        $author = $_POST['author'];
    }
    if (isset($_POST['price'])) {
        $price = $_POST['price'];
    }
    if (isset($_POST['product'])) {
        $product = $_POST['product'];
    }
    if ($namebook != '' && $author != '' && $price != '' && $product != '') {
        $namebook = str_replace('\'', '\\\'', $namebook);
        $author = str_replace('\'', '\\\'', $author);
        $price  = str_replace('\'', '\\\'', $price);
        $product = str_replace('\'', '\\\'', $product);

        $insertbook = "INSERT INTO `book`(`name_book`, `author`, `price`, `producer`) VALUES ('$namebook','$author','$price','$product')";

        insert_remove($insertbook);
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Book</title>
</head>

<body>
    <div class="container" style="margin-top: 30px">

        <div class="container" style="border: 1px solid red; width: 40%; float:left;">
            <form method="post">
                <div class="form-group">
                    <label for="namebook">
                        <h6>Name book: </h6>
                    </label>
                    <input type="text" name="namebook" class="form-control" placeholder="Enter name book" id="namebook">
                </div>
                <div class="form-group">
                    <label for="age">
                        <h6>Author: </h6>
                    </label>
                    <input type="text" name="author" class="form-control" placeholder="Enter author" id="author">
                </div>
                <div class="form-group">
                    <label for="price">
                        <h6>Price: </h6>
                    </label>
                    <input type="number" name="price" class="form-control" placeholder="Enter price" id="price">
                </div>
                <div class="form-group">
                    <label for="product">
                        <h6>Product: </h6>
                    </label>
                    <input type="text" name="product" class="form-control" placeholder="Enter product" id="product">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
        <div class="container" style="width:50%;float:right; border:1px solid black">
            <div class="container">
                <!-- Managing information book-->
                <form method="get">
                    <input type="text" name="search" style="width:auto;margin-top: 15px; margin-bottom: 15px; float:left;" placeholder="Search by name book">
                    <button type="submit" class="btn btn-primary" style="margin:15px 0px 0px 20px">Search</button>
                </form>
            </div>
            <div class="container" style="float: left;">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name book</th>
                            <th>Author</th>
                            <th>Price</th>
                            <th>Product</th>
                            <th>Option</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?= $tr ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <a href="logout.php" style="padding-left:20px">Logout</a>
</body>
<script>
   
</script>

</html>