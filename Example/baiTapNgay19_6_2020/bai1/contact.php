<?php
require_once('manage.php');

$fullname = $email = $subject = $sql='';
if (!empty($_POST)) {
   
    if (isset($_POST['fullname'])) {
        $fullname =$_POST['fullname'];
    } if (isset($_POST['email'])) {
        $email =$_POST['email'];
    } if (isset($_POST['subject'])) {
        $subject =$_POST['subject'];
    }

    if ($fullname != '' && $email != '' && $subject != '') {
        $fullname = str_replace('\'', '\\\'', $fullname);
        $email = str_replace('\'', '\\\'', $email);
        $subject  = str_replace('\'', '\\\'', $subject);
        $sql = "INSERT INTO `contact`(`fullname`, `email`, `subject`) VALUES ('$fullname','$email','$subject')";
        insert_remove($sql);
    }
}
?>



<!-- /////////////////////////////////////////////////// -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>List of product</title>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        body {
            padding: 65px;
            margin-top: 100px;
        }

        a.btn.btn-danger {
            margin-left: 15px;
        }

        p.btn.btn-success {
            margin-top: 16px;
        }

        span.btn.btn-primary {
            margin-left: 15px;
        }

        * {
            box-sizing: border-box;
        }

        input[type=text],
        input[type=email],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            /* background-color: #f2f2f2; */
            padding: 20px;
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="welcome.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-3">

                <h1 class="my-4">Danh muc</h1>
                <div class="list-group">
                    <a href="#" class="list-group-item">Dien Thoai</a>
                    <a href="#" class="list-group-item">Laptop </a>
                    <a href="#" class="list-group-item">Tablet</a>
                </div>

            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="https://cdn.tgdd.vn/2020/06/banner/S20-800-300-800x300-4.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="https://cdn.tgdd.vn/2020/06/banner/800-300-800x300-1.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="https://cdn.tgdd.vn/2020/05/banner/60749522-6C82-4FF3-BEF0-76FD21BB4D25-800x300.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="row" style="background: #f2f2f2;">

                    <div class="container">
                        <h3>Contact Form</h3>
                    </div>
                    <div class="container">
                        <form method="post" style="width: 70%;margin-left:100px;">
                            <label for="fname">Full name</label>
                            <input type="text" id="fname" name="fullname" placeholder="Your full name..">

                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Your email..">

                            <label for="subject">Subject</label>
                            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                            <button onclick="mess()" type="submit" class="btn btn-primary">Submit</button>

                        </form>
                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">ban dien thoai</p>
        </div>
        <!-- /.container -->
    </footer>
<script>
    function mess() {
        alert("thanks");
    }
</script>


</body>

</html>