<?php
require_once('manage.php');
$id = $link = $title = $price = $percent = $sql = '';
if (!empty($_GET)) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    //select product
    $product[] = array();
    $sql = "SELECT * FROM `product` where id =" . $id;
    $product = select($sql);

    foreach ($product as $pro) {
        $id = $pro['id'];
        $link = $pro['link'];
        $title = $pro['title'];
        $price = $pro['price'];
        $percent = $pro['percent'];
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
    <title>Insert product</title>
</head>

<body>
    <div class="container">
        <div class="container" style="border: 1px solid red;">
            <div class="container">
                <form method="post" class="was-validated" action="">
                    <input style="display: none;" type="text" name="id" class="form-control" placeholder="Enter link" id="id" value="<?= $id ?>" required>

                    <div class="form-group">
                        <label for="link">
                            <h6>Link: </h6>
                        </label>
                        <input type="text" name="link" class="form-control" placeholder="Enter link" id="link" value="<?= $link ?>" required>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="title">
                            <h6>Title: </h6>
                        </label>
                        <input type="title" name="title" class="form-control" placeholder="Enter title" id="title" value="<?= $title ?> " required>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="price">
                            <h6>Price: </h6>
                        </label>
                        <input type="number" name="price" class="form-control" placeholder="Enter price" id="price" value="<?= $price ?>" required>
                        <div class=" invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group">
                        <label for="percent">
                            <h6>Percent: </h6>
                        </label>
                        <input type="number" name="percent" class="form-control" placeholder="Enter percent" id="percent" value="<?= $percent ?>" required>
                        <div class=" invalid-feedback">Please fill out this field.</div>
                    </div>
                    <button type="submit" id="register" class="btn btn-primary">Add product</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
    $('#register').on('click', function() {
        var id = $('#id').val();
        var link = $('#link').val();
        var title = $('#title').val();
        var price = $('#price').val();
        var percent = $('#percent').val();

        if (link == '' || title == '' || price == '' || percent == '') {
            alert('Enter full data')
        } else {
            $.post('insertProduct1.php', {
                id: id,
                link: link,
                title: title,
                price: price,
                percent: percent,
            }, )

            alert('Insert success');

            window.open('admin.php');
        }
    })
</script>
<?php

?>

</html>