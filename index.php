<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap/js/jquery-3.6.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<br>
<div class="logo">
    <img src="images/logo.png" alt="Logo" width="200" height="100">
</div>
<br>
<div class="heading">
    <h2 class="text-center text-white text-uppercase" style="padding: 16px 18px;">Login</h2>
</div>
<div class="container">
    <form action="" method="post">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <label for=""><b>Username</b></label>
                <input type="text" name="uName" class="form-control" required>
                <label for=""><b>Password</b></label>
                <input type="password" name="passwd" class="form-control" required>
                <label for=""><b>User Group</b></label>
                <select name="uGroup" id="" class="form-control" required>
                    <option value="Systems Administrator">Systems Administrator</option>
                    <option value="Administrator">Administrator</option>
                    <option value="Front Office">Front Office</option>
                    <option value="Accounts">Accounts</option>
                    <option value="Management">Management</option>
                </select>
                <br>
                <p class="text-center">
                    <button class="btn btn-success" type="submit">Login</button>
                </p>
            </div>
            <div class="col-md-4">

            </div>
        </div>

</div>
</form>
</div>
</body>
</html>