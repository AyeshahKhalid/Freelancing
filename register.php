<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="shortcut icon" href="images/logo5.png" type="image/x-icon" width="100%" height="100%">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    body {
        display: flex;
        justify-content: center;
        background-color: #d4d7d9;
        text-align:center;
    }

    #head {
        width: 30%;
        height: 580px;
        padding:30px 30px;
        margin: 50px 0px;
        background-color:white;
        box-shadow: 1px 1px 4px #84878a;
    }
    .btn-primary{
        width: 100%;
        background-image: linear-gradient(#24a7f2,#056ba6)!important;
    }
    .form-group{
        padding: 5px 0px;
    }
</style>

<body>
    <div id="head">
        <p class="text-center">
            <img src="images/logo5.png" width="20%" alt="">
            <h3 class="text-center">Sign Up</h3><hr>
        </p>
        <form action="#" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="Full-name" placeholder="Full Name">
              </div>
            <div class="form-group">
              <input type="email" class="form-control" name="Email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="Password" placeholder="Password">
            </div><hr>
            <button type="submit" name="register" class="btn btn-primary"><b>Join 24seven</b></button><br><br>
            <small>Already have an account <a href="index.php">Log in</a></small>
    <?php
    include_once("data.php");
    if(isset($_POST['register'])) {
        $name     = $_POST['Full-name'];
        $email    = $_POST['Email'];
        $password = $_POST['Password'];

        // If email already exists, throw error
        $query = mysqli_query($conn ,"SELECT 'Email' FROM `signupform` WHERE  `Full-name`='$name' AND `Email`='$email' AND `Password`='$password'");

        // Count the number of row matched 
        $user_matched = mysqli_num_rows($query);

        // If number of user rows returned more than 0, it means email already exists
        if ($user_matched > 0) {
            echo "<br/><br/> User already exists with the email id '$email'.";
        } else {
            // Insert user data into database
            $result   = mysqli_query($conn, "INSERT INTO `signupform`(`Full-name`, `Email`, `Password`) VALUES ('$name','$email','$password')");

            // check if user data inserted successfully.
            if ($result) {
                echo "<br/><br/>User Registered successfully.";
            } else {
                echo "Registration error. Please try again." . mysqli_error($conn);
            }
        }
    }
    ?>
    </form>
    </div>
</body>

</html>