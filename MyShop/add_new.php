<!----------------------------------------------------PHP to add new entry--------------------------------->
<?php
include "db_conn.php";

if(isset($_POST["submit"])) 
{
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];

    $sql="INSERT INTO `myshoptbl` (`id`, `first_name`, `last_name`, `email`, `gender`) VALUES ('NULL', '$first_name', '$last_name', '$email', '$gender')";

    $result=mysqli_query($con, $sql);

    if($result)
    {
        header("Location:index.php?msg=New Record Created Successfully");
    }
    else
    {
        echo "Failed:" .mysqli_error($con);
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<!----------------------------------------------------Bootstrap----------------------------------------------------->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<!----------------------------------------------------font awesome---------------------------------------------------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#245953;">
        PHP COMPLETE CRUD APPLICATION
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Add New User</h3>
            <p class="text-muted">Complete the form below to add a new user</p>
        </div>

        <!----------------------------------------------------form to add new entry--------------------------------->

        <div class="container d-flex justify-content-center">
            <form action="add_new.php" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">

                <div class="col">
                    <label class="form-label">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Enter your first name">
                </div>

                <div class="col">
                    <label class="form-label">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Enter your last name">
                </div>

            </div>

                <div class="row mb-3">
                    <label class="form-label">Emails:</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your Email address">
                </div>

                <div class="form-group mb-3">
                    <label>Gender:</label>&nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                    <label for="male"class="form-input-lable">Male</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                    <label for="female"class="form-input-lable">Female</label>
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>

            </form>
        </div>
    </div>

<!----------------------------------------------------Bootstrap----------------------------------------------------->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>    

</body>
</html>