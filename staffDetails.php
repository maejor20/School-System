<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff Details</title>
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
    <h2 class="text-center text-white text-uppercase" style="padding: 16px 18px;">Staff Details</h2>
</div>
<div class="container">
    <form action="" method="post">
        <div class="row">
            <div class="col-md-4">
                <label for=""><b>First Name</b></label>
                <input type="text" name="fName" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for=""><b>Middle Name</b></label>
                <input type="text" name="mName" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for=""><b>Last Name</b></label>
                <input type="text" name="lName" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for=""><b>Gender</b></label>
                <br>
                <input type="radio" name="gender" value="Male" required>&nbsp;Male
                <input type="radio" name="gender" value="Female" required>&nbsp;Female
            </div>
            <div class="col-md-4">
                <label for=""><b>Position</b></label>
                <input type="text" name="position" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for=""><b>Department</b></label>
                <br>
                <input type="text" name="dept" class="form-control" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label for=""><b>Join Date</b></label>
                <br>
                <input type="date" name="jDate" class="form-control" required>
            </div>
            <div class="col-md-8">
                <div class="buttons">
                    <br>
                    <button class="btn btn-success" type="submit">Add New</button>
                    <br>
                </div>
            </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>