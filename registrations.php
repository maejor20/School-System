<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrations</title>
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
    <h2 class="text-center text-white text-uppercase" style="padding: 16px 18px;">Student Registration</h2>
</div>
<div class="container">
    <form action="" method="post">
        <div class="row">
            <div class="col-md-3">
                <label for=""><b>First Name</b></label>
                <input type="text" name="fName" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label for=""><b>Other Names</b></label>
                <input type="text" name="oNames" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label for=""><b>Gender</b></label>
                <br>
                <input type="radio" name="gender" value="Male" required>&nbsp;Male
                <input type="radio" name="gender" value="Female" required>&nbsp;Female
            </div>
            <div class="col-md-3">
                <label for=""><b>Date of Birth</b></label>
                <input type="date" name="dob" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for=""><b>Postal Address</b></label>
                <input type="text" name="pAddress" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label for=""><b>Telephone Number</b></label>
                <input type="tel" name="telNumber" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label for=""><b>Email Address</b></label>
                <br>
                <input type="email" name="emailAddress" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label for=""><b>Next of Kin (NOK) Name</b></label>
                <input type="text" name="nokName" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for=""><b>NOK Telephone Number</b></label>
                <input type="tel" name="nokTelNumber" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label for=""><b>Course Enrolled For</b></label>
                <select name="course" id="" class="form-control" required>
                    <option value="Computer Application Packages">Computer Application Packages</option>
                    <option value="Graphic Design">Graphic Design</option>
                    <option value="Software Development">Software Development</option>
                    <option value="Digital Marketing">Digital Marketing</option>
                    <option value="Digital Media">Digital Media</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for=""><b>KCSE Mean Grade</b></label>
                <br>
                <select name="grade" id="" class="form-control" required>
                    <option value="A">A</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B">B</option>
                    <option value="B-">B-</option>
                    <option value="C+">C+</option>
                    <option value="C">C</option>
                    <option value="C-">C-</option>
                    <option value="D+">D+</option>
                    <option value="D">D</option>
                    <option value="D-">D-</option>
                    <option value="E">E</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for=""><b>Education Level</b></label>
                <select name="educLevel" id="" class="form-control" required>
                    <option value="High School">High School</option>
                    <option value="College">College</option>
                    <option value="University">University</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for=""><b>High School Attended</b></label>
                <input type="text" name="highschool" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label for=""><b>Year From</b></label>
                <input type="number" name="yearfrom" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label for=""><b>Year To</b></label>
                <br>
                <input type="number" name="yearto" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label for=""><b>College/University Attended</b></label>
                <input type="text" name="collegeUniversity" class="form-control" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="buttons">
                    <button class="btn btn-success" type="submit">Add New</button>
                </div>
            </div>
            <div class="col-md-4"></div>
            </div>
        </div>
    </form>
</div>
</body>
</html>