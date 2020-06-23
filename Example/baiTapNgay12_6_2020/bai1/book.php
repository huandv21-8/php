<?php
$n = rand(1, 100);
echo 'n = ' . $n;
$booklist = array();


for ($i = 1; $i <= $n; $i++) {
    $book = [
        'name' => 'sach' . $i,
        'author' => 'tac gia' . $i,
        'price' => 'gia' . $i,
        'nhaxuatban' => 'nha xuat ban' . $i
    ];
    $booklist[] = $book;
}
$tr = '';
foreach ($booklist as $bo) {
    $tr .= '<tr>' .
        '<td>' . $bo['name'] . '</td>' .
        '<td>' . $bo['author'] . '</td>' .
        ' <td>' . $bo['price'] . '</td>' .
        '<td>' . $bo['nhaxuatban'] . '</td>' .
        '</tr>';
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
</head>

<body>

    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name book</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>nha xuat ban</th>
                </tr>
            </thead>
            <tbody>
                <?= $tr ?>
            </tbody>
        </table>
    </div>

</body>

</html>