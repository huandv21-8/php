
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
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form method="post" action="login.php">
            <div class="form-group">
                <label for="name">
                    <h6>Full name: </h6>
                </label>
                <input type="text" name="name" class="form-control" placeholder="Enter name" id="name">
            </div>
            <div class="form-group">
                <label for="address">
                    <h6>Address: </h6>
                </label>
                <input type="text" name="address" class="form-control" placeholder="Enter address" id="address">
            </div>
            <div class="form-group">
                <label for="user">
                    <h6>Username: </h6>
                </label>
                <input type="text" name="user" class="form-control" placeholder="Enter username" id="user">
            </div>
            <div class="form-group">
                <label for="pass">
                    <h6>password: </h6>
                </label>
                <input type="password" name="pass" class="form-control" placeholder="Enter pass" id="pass">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>