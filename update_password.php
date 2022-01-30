<?php


    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      
      include '_database1.php';
      $var_value = $_POST['userid'];
      $password = $_POST["password"];
      $cpassword = $_POST["cpassword"];


      if($password == $cpassword)
      {

        $sql2 = "update `php_login`.`employee_login` set Passwod='$password' where ID='$var_value' ";
        // echo $id;
        if(mysqli_query($conn, $sql2))
         {
          ?>
            <script>
                alert("Password is Updated");

            </script>


          <?php

         }
         else
         {
           die ('Error: '.mysqli_error($conn));

         }

      }

      else 
      {
          ?>

            <script>
                alert("Password Does not match");

            </script>

          <?php
      }






    }
    



?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    
      <script defer src="assets/fontawesome/js/all.min.js"></script>
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div class="sidebar-header" style="height: 50px;margin-top: -30px">
                      <i class="fa fa-users text-success me-4"></i>
                        <span>ELMS</span>
                </div>
               <div class="sidebar-menu">
                  <ul class="menu">
                    <li class="sidebar-item active has-sub">
                        <a href="#" class='sidebar-link'>
                        <i class="fa fa-table text-success"></i>
                        <span>Leave Management</span>
                        </a>
                        <ul class="submenu ">
                           <li>
                              <a href="all_leave.php">All Leaves</a>
                           </li>
                           <li>
                              <a href="pending_leave.php">Pending Leaves</a>
                           </li>
                           <li>
                              <a href="approve_leave.php">Approve Leaves</a>
                           </li>
                           <li>
                              <a href="not_approve_leave.php">Not Approve Leaves</a>
                           </li>
                        </ul>
                     </li>

                     <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                        <i class="fa fa-table text-success"></i>
                        <span>Password</span>
                        </a>
                        <ul class="submenu ">
                           <li>
                              <a href="update_password.php">Update Password</a>
                           </li>
                        </ul>
                     </li>

                  </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                     <li class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                           <div class="avatar me-1">
                              <img src="assets/images/admin.png" alt="" srcset="">
                           </div>
                           <div class="d-none d-md-block d-lg-inline-block">Hi, Admin</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          
                           <a class="dropdown-item" href="login.php"><i data-feather="log-out"></i> Logout</a>
                        </div>
                     </li>
                  </ul>
                </div>
            </nav>
            
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Update Password</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html" class="text-success">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Update Password</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>


    <!-- // Basic multiple Column Form section start -->
    <form id="multiple-column-form"  method="post">
        <div class="row match-height">
            <div class="col-8">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Employee ID</label>
                                            <div class="position-relative">
                                                <input type="text"  onfocus="this.value=''" value="emloyee id" class="form-control" name="userid" id="first-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="fa fa-key"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">New Password</label>
                                            <div class="position-relative">
                                                <input type="password" class="form-control" placeholder="new password"  name="password" id="first-name-icon">
                                               
                                                <div class="form-control-icon">
                                                    <i class="fa fa-key"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Confirm Password</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="confirm passsword" name="cpassword" id="first-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="fa fa-key"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                    <input type="checkbox" onclick="myFunction()"> Show Password
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>
    <!-- // Basic multiple Column Form section end -->
</div>

        </div>
    </div>

    <script>
        function myFunction()
            {
                var x = document.getElementById("first-name-icon","first-name-icon");
                if(x.type === "password")
                {
                    x.type = "text";
                }
                else{
                    x.type= "password";
                }
            }
        
    </script>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script src="assets/js/main.js"></script>
</body>
</html>
