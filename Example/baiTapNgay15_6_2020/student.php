<?php
require_once('a.php');
require_once('manage.php');
require_once('insertDatabase.php');

$tr = '';
$xoa = '';
$hienthi = '';

if (!empty($_GET)) {
    if (isset($_GET['id'])) {
        $d = $_GET['id'];

        $xoa = 'DELETE FROM student WHERE student.id =' . $d;
        insert_remove($xoa);
    }
}

$hienthi = "select * from student";
$studentList = select($hienthi);
foreach ($studentList as $student) {
    $tr .= '<tr>' .
        '<td class="id">' . $student['id'] . '</td>' .
        '<td>' . $student['name'] . '</td>' .
        '<td>' . $student['age'] . '</td>' .
        ' <td colspan="2">' . $student['address'] . '</td>' .
        '<td >' . '<a href="?id=' . $student['id'] . '"><button>Delete</button></a>' . '</td>' .
        '<td >' . '<a href="?id=' . $student['id'] . '"><button>Update</button></a>' . '</td>' .
        '</tr>';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <script>

    
    </script> -->
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
       
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full name</th>
                    <th>Age</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <?= $tr ?>
            </tbody>
        </table>
    </div>
    <div class="container">
        <form method="post">
            <div class="form-group">
                <label for="user">
                    <h6>Full name: </h6>
                </label>
                <input type="text" name="name" class="form-control" placeholder="Enter name" id="name">
            </div>
            <div class="form-group">
                <label for="age">
                    <h6>Age: </h6>
                </label>
                <input type="number" name="age" class="form-control" placeholder="Enter age" id="age">
            </div>
            <div class="form-group">
                <label for="pwd">
                    <h6>Address: </h6>
                </label>
                <input type="text" name="address" class="form-control" placeholder="Enter address" id="address">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>