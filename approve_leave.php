<?php

$showAlert=false;

      include '_database1.php';
     

      
        $sql = "Select * from `php_login`.`employee_leave` where leave_status=2";
      
        $result = mysqli_query($conn, $sql);
       // $num = mysqli_num_rows($result);

 



?>










<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approved</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">

    <script defer src="assets/fontawesome/js/all.min.js"></script>
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
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
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                      <li class="dropdown nav-icon">
                           
                        </li>
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
                            <h3>Approved</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-success">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Approved</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <table class='table' id="table1">
                                <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Leave Reason</th>
                                        <th>Form Date</th>
                                        <th>To Date</th>
                                        <th>Status</th>
                                    </tr>

                                    <tbody>
                                    <?php
                                        while($rows=mysqli_fetch_assoc($result))
                                        {
                                                                               
                                    ?>
                                            <tr>

                                                <td><?php echo $rows['Name']; ?></td>
                                                <td><?php echo $rows['Leave_reason']; ?></td>
                                                <td><?php echo $rows['From_date']; ?></td>
                                                <td><?php echo $rows['To_date']; ?></td>
                                                <td>
                                                    <?php
                                                        if($rows['leave_status']==2)
                                                        { ?>

                                                        <span class="badge bg-success">Approved</span>
                                                            
                                                     <?php   }

                                                        ?>
                                                    </td>
                                                
                                                </tr>
                                    <?php
                                        }
                                            //endwhile;
                                    ?>

                                    </tbody>



                                </thead>
                               
                            </table>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>

    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script src="assets/js/vendors.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>