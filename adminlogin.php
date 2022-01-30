<?php

$showAlert=false;
//echo "Harsh Raj Vardhan";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      
      include '_database1.php';
      $username = $_POST["username"];
      $password = $_POST["password"];

      
        $sql = "Select * from `php_login`.`admin_login` where  Name = '$username' AND Passwod = '$password'  ";
      
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        
 
        if($num==1)
        {
          $showAlert=true;
          //echo "vardhan";
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['username'] = $username;
          header("location:all_leave.php");

        }
        else 
        {
          
        }

      }
    



?>















<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">

      <script defer src="assets/fontawesome/js/all.min.js"></script>
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>
    <div id="auth">

        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <h3>Admin Sign In</h3>
                            </div>
                            <form name="myform" action="/Techfinni/adminlogin.php" method= "post" onsubmit="return validateForm()" required>
                                <div class="form-group position-relative has-icon-left">
                                    <label for="username">Username</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="username" name="username">
                                        <div class="form-control-icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left">
                                    <div class="clearfix">
                                        <label for="password">Password</label>
                                        <a href="#" class='float-end'>
                                            <small>Forgot password?</small>
                                        </a>
                                    </div>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" id="password" name="password">
                                        <div class="form-control-icon">
                                            <i class="fa fa-key"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class='form-check clearfix my-4'>
                                    <div class="checkbox float-start">
                                       <!--<a href="index.html" class='float-end'>
                                            <small>admin</small>
                                        </a>-->
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <button class="btn btn-primary float-end">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
    
    function validateForm() 
    {
        
        var x = document.forms["myform"]["username"].value;
        var y = document.forms["myform"]["password"].value;

        //alert("qwertyuiop");
        if (x == "" && y == "" ) 
        {
            alert("Please must be filled out the ID and Pasword");
            return false;
        }

        if (x == "" ) 
        {
            alert("Please must be filled out the ID");
            return false;
        }

        if (y == "" ) 
        {
            alert("Please must be filled out the Password ");
            return false;
        }

    }
</script>    



    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/js/app.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>