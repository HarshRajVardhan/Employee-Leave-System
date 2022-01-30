<?php

$showAlert=false;

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      
      include '_database1.php';
      $username = $_POST["username"];
      $email = $_POST["email"];
      $phone = $_POST["phone"];
      $password = $_POST["password"];
      $cpassword = $_POST["cpassword"];
      $addres = $_POST["addres"];
      $exists=false;
      

      if(($password == $cpassword) && $exists==false)
      {

        $co = $username.$phone;



        echo gettype($phone);
        $sql = "INSERT INTO `php_login`.`employee_login` ( `Name` , `Email Id` , `Phone No` , `Passwod` , `Address` , `ID` , `Dt`) VALUES ('$username' , '$email' , '$phone' , '$password' , '$addres' , '$co' , current_timestamp()) ";

        $result = mysqli_query($conn, $sql);
 
        if(!$result)
        {
          die ('Error: '.mysqli_error($conn));
        }

        //echo var_dump($result);
        if($result)
        {
          $showAlert=true;

         // echo "asdfg";
        }
        else 
        {
          
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
    <title>Create Account</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

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
                                <h3>Employee Create Account</h3>
                            </div>
                            <form name="myform"   autocomplete="off" action="/Techfinni/employe_create_account.php" onsubmit="return validateForm()" method = "post" required>
                                <div class="form-group position-relative has-icon-left">
                                    <label for="username">Name</label>
                                    <div class="position-relative">
                                        <input type="text"  onfocus="this.value=''" autocomplete="off" class="form-control" id="username" name="username">
                                        <div class="form-control-icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                                

                                

                                <div class="form-group position-relative has-icon-left">
                                    <label for="email">Email</label>
                                    <div class="position-relative">
                                        <input type="email" class="form-control" id="email" name="email">
                                        <div class="form-control-icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                                
                                

                                <div class="form-group position-relative has-icon-left">
                                    <label for="phone">Phone No.</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" onkeypress="return isNumberKey(event)" id="phone" name="phone" pattern="[1-9]{1}[0-9]{9}">
                                        <div class="form-control-icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left">
                                


                                    <div class="clearfix">
                                        <label for="password">Password</label>
                                       <!--<a href="#" class='float-end'>
                                            <small>Forgot password?</small>
                                        </a>-->
                                    </div>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" id="password"name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one special chrarcter and one uppercase and lowercase letter, and at least 8 or more characters">
                                        <span id="password_strength"></span>
                                        <div class="form-control-icon">
                                            <i class="fa fa-key"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group position-relative has-icon-left">
                                    <div class="clearfix">
                                        <label for="cpassword">Confirm Password</label>
                                    </div>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" id="cpassword"name="cpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one special chrarcter and one uppercase and lowercase letter, and at least 8 or more characters"  >
                                        <span id="strength"></span>
                                        <div class="form-control-icon">
                                            <i class="fa fa-key"></i>
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group position-relative has-icon-left">
                                    <label for="addres">Address</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="addres" name="addres">
                                        <div class="form-control-icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left">
                                

                                <div class='form-check clearfix my-4'>

                                </div>
                                <div class="clearfix">
                                    <button type="submit" class="btn btn-primary float-end">submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script>
        function isNumberKey(evt)
        {
	        var charCode = (evt.which) ? evt.which : event.keyCode
	        if (charCode > 31 && (charCode < 48 || charCode > 57))
	        return false;

	        return true;
}
</script>

<script type="text/javascript">
    $(function () {
        $("#password").bind("keyup", function () {
            if ($(this).val().length == 0) {
                $("#password_strength").html("");
                return;
            }
 
            
            var regex = new Array();
            regex.push("[A-Z]");
            regex.push("[a-z]");
            regex.push("[0-9]");
            regex.push("[$@$!%*#?&]");
 
            var passed = 0;
 
            
            for (var i = 0; i < regex.length; i++) {
                if (new RegExp(regex[i]).test($(this).val())) {
                    passed++;
                    
                }
            }
 
            //alert (passed);
            
            if (passed > 2 && $(this).val().length > 8) {
                passed++;
            }
 
            
            var color = "";
            var strength = "";
            switch (passed) {
                case 0:
                case 1:
                    strength = "Weak";
                    color = "red";
                    break;
                case 2:
                    strength = "Good";
                    color = "darkorange";
                    break;
                case 3:
                case 4:
                    strength = "Strong";
                    color = "green";
                    break;
                case 5:
                    strength = "Very Strong";
                    color = "darkgreen";
                    break;
            }
            $("#password_strength").html(strength);
            $("#password_strength").css("color", color);
        });
    });
</script>


<script type="text/javascript">
    $(function () {
        $("#cpassword").bind("keyup", function () {
            
            if ($(this).val().length == 0) {
                $("#strength").html("");
                return;
            }
 
            
            var regex = new Array();
            regex.push("[A-Z]");
            regex.push("[a-z]");
            regex.push("[0-9]");
            regex.push("[$@$!%*#?&]");
 
            var passed = 0;
 
            
            for (var i = 0; i < regex.length; i++) {
                if (new RegExp(regex[i]).test($(this).val())) {
                    passed++;
                }
            }
 
 
            
            if (passed > 2 && $(this).val().length > 8) {
                passed++;
            }
 
            
            var color = "";
            var strength = "";
            switch (passed) {
                case 0:
                case 1:
                    strength = "Weak";
                    color = "red";
                    break;
                case 2:
                    strength = "Good";
                    color = "darkorange";
                    break;
                case 3:
                case 4:
                    strength = "Strong";
                    color = "green";
                    break;
                case 5:
                    strength = "Very Strong";
                    color = "darkgreen";
                    break;
            }
            $("#strength").html(strength);
            $("#strength").css("color", color);
        });
    });
</script>







    <script>
    
            function validateForm() 
            {
                
                var x = document.forms["myform"]["username"].value;
                var y = document.forms["myform"]["email"].value;
                var z = document.forms["myform"]["phone"].value;
                var v = document.forms["myform"]["password"].value;
                var p = document.forms["myform"]["cpassword"].value;
                var o = document.forms["myform"]["addres"].value;
                //alert("qwertyuiop");
                if (x == "" && y == "" && z == "" && v == "" && p == "" && o == "") 
                {
                    alert("Please must be filled out the form");
                    return false;
                }

                if (x == "" ) 
                {
                    alert("Please must be filled out the Name ");
                    return false;
                }

                if (y == "" ) 
                {
                    alert("Please must be filled out the Email ");
                    return false;
                }

                if (z == "" ) 
                {
                    alert("Please must be filled out the Phone Number ");
                    return false;
                }

                if (v == "" ) 
                {
                    alert("Please must be filled out the Password ");
                    return false;
                }

                if (p == "" ) 
                {
                    alert("Please must be filled out the Confirm Password ");
                    return false;
                }

                if (o == "") 
                {
                    alert("Please must be filled out the Address Box");
                    return false;
                }


            }
    </script>    
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/js/app.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>