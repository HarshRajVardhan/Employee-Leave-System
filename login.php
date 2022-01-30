<?php

$showAlert=false;
//echo "Harsh Raj Vardhan";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      
      include '_database1.php';
      $username = $_POST["username"];
      $password = $_POST["password"];

      
        $sql = "Select * from php_login.`employee_login` where  ID = '$username' AND Passwod = '$password'  ";
      
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        //echo "Harsh Raj Vardhan";
 
        if($num==1)
        {
          $showAlert=true;
          //echo "vardhan";

          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['username'] = $username;
          header("location:leave_Status.php");
          header("location:apply_leave.php");

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
                                <h3>Employee Sign In</h3>
                            </div>
                            <form  name="myform" action="/Techfinni/login.php" method = "post" onsubmit="return validateForm()" required>
                                <div class="form-group position-relative has-icon-left">
                                    <label for="username">Username</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="name">
                                        <div class="form-control-icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left">
                                    <div class="clearfix">
                                        <label for="password">Password</label>
                                        <a href="#" class='float-end'>
                                            
                                        </a>
                                    </div>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" id="password"name="password" >
                                        <div class="form-control-icon">
                                            <i class="fa fa-key"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class='form-check clearfix my-4'>
                                    <div class="checkbox float-start">
                                        <a href="adminlogin.php" class='float-end'>
                                            <h4>admin</h4>
                                        </a>
                                    </div>
                                    <a href="employe_create_account.php" class='float-end'>
                                            <small>Create Account</small>
                                        </a>
                                </div>
                                <div class="clearfix">
                                    <button type="submit" class="btn btn-primary float-end">Login</button>
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