<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Receipt/Payment</title>
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
    <h2 class="text-center text-white text-uppercase" style="padding: 16px 18px;">Receipt/Payment</h2>
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
                <label for=""><b>Course</b></label>
                <select name="course" id="" class="form-control" required>
                    <option value="Computer Application Packages">Computer Application Packages</option>
                    <option value="Graphic Design">Graphic Design</option>
                    <option value="Software Development">Software Development</option>
                    <option value="Digital Marketing">Digital Marketing</option>
                    <option value="Digital Media">Digital Media</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for=""><b>Tuition Fees</b></label>
                <input type="number" name="tuition" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for=""><b>Registration Fees</b></label>
                <input type="number" name="regfees" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for=""><b>Hostel/Accomodation Fees</b></label>
                <br>
                <input type="number" name="hostelfees" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for=""><b>Library Fees</b></label>
                <input type="number" name="libFees" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for=""><b>Total Amount</b></label>
                <input type="number" name="totAmount" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for=""><b>Amount Paid</b></label>
                <br>
                <input type="number" name="amountPaid" class="form-control" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="buttons">
                    <br>
                    <button class="btn btn-success" type="submit">Add New</button>
                    <br>
                </div>
            </div>
            <div class="col-md-4"></div>
            </div>
        </div>
    </form>
</div>
</body>
</html>