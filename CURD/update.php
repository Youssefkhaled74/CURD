<?php
// include './connect.php';
$con = mysqli_connect('localhost', 'root', '', 'company');
$id=$_GET['updateid'];
$sqlselect="SELECT * from `user` where id =$id";
$resultselect=mysqli_query($con,$sqlselect);
$row=mysqli_fetch_assoc($resultselect);
$name=$row['name'];
$email=$row['email'];
$mobile =$row['mobile'];
$password=$row['password'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $sqlupdate = "UPDATE `user` set id='$id',name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
    $resultupdate = mysqli_query($con, $sqlupdate);
    if ($resultupdate) {
        // echo '<div class="alert alert-success" role="alert"> the insert is succes </div>';
        header('location:display.php');
    } else {
        echo "the insert is false";
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>CURD operation</title>
</head>

<body>
    <h1 class="text-center mt-5">CURD Project</h1>
    <div class="container border border-primary">
        <form method="post">
            <div class="form-group">
                <label>Your Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" autocomplete="off" name="name" value=<?php
              echo $name?>>
            </div>
            <div class="form-group">
                <label>Your Email</label>
                <input type="text" class="form-control" placeholder="Enter Your email" autocomplete="off" name="email" value=<?php
               echo $email?>>
            </div>
            <div class="form-group">
                <label>Your Mobile</label>
                <input type="number" class="form-control" placeholder="Enter Your Mobile" autocomplete="off" name="mobile" value=<?php
               echo $mobile?>>
            </div>
            <div class="form-group">
                <label>Your Password</label>
                <input type="Password" class="form-control" placeholder="Enter Your Password" autocomplete="off" name="password" value=<?php
                echo $password?>>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>