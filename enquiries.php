<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enquiries</title>
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
    <h2 class="text-center text-white text-uppercase" style="padding: 16px 18px;">Enquiries</h2>
</div>
<div class="container">
    <form action="" method="post">
        <div class="row">
            <div class="col-md-4">
                <label for=""><b>First Name</b></label>
                <input type="text" name="fName" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for=""><b>Other Names</b></label>
                <input type="text" name="oNames" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for=""><b>Telephone Number</b></label>
                <input type="tel" name="telNumber" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for=""><b>Email Address</b></label>
                <input type="email" name="emailAddress" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for=""><b>Course</b></label>
                <select name="course" id="" class="form-control" required>
                    <option value="Computer Application Packages">Computer Application Packages</option>
                    <option value="Graphic Design">Graphic Design</option>
                    <option value="Software Development">Software Development</option>
                    <option value="Digital Marketing">Digital Marketing</option>
                    <option value="Digital Media">Digital Media</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for=""><b>How did you know us?</b></label>
                <select name="howdidyouknow" id="" class="form-control" required>
                    <option value="Newspaper">Newspaper</option>
                    <option value="Television">Television</option>
                    <option value="Student">Student</option>
                    <option value="Friend">Friend</option>
                    <option value="Alumni">Alumni</option>
                    <option value="Staff Member">Staff Member</option>
                    <option value="Social Media">Social Media</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label for=""><b>Comments</b></label>
                <textarea name="comments" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="col-md-4">
                <br><br><br><br><br>
                <button class="btn btn-secondary" type="submit">Add New</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#" class="btn btn-primary">Dashboard</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>