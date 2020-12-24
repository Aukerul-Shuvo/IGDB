<?php
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/glyphicon.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



<title>Sign Up Form</title>
<link rel="shortcut icon" href="img/mypict.ico" type="image/png">

<style>
body {
        background-image: url("img/bg.png");
        background-size: cover;
} 
</style>

</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">IGDB</a>
                </div>
                <div>
                <ul class="nav navbar-nav navbar-center">
                    <li>
                        <form class="form-inline navbar-form">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-info" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                                </button> 
                            </div>
                            </div>
                        </form>  
                    </li>
                    </ul>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right navbar-dark">
                        
                        <li><a href="sign-up.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                        <li><a href="log-in.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    
    
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="text-center">Hurry Up! Sign UP!</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6 col-lg-push-3">
				<form action="sign-up.php" id="contactform" method="POST" role="form" onsubmit()="return Validate()" name="vform">
					

					<div class="form-group">
						<label for="username">Choose your Username</label>
						<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input name="username" type="text" class="form-control" id="username" placeholder="user123" required>
						<div id="email_error" class="val_error"></div>
						</div>
					</div>

					<div class="form-group">
						<label for="pass">Create a password</label>
						<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input name="password" type="password" class="form-control" id="pass" required>
						</div>
					</div>

					<div class="form-group">
						<label for="pass2">Confirm your Password</label>
						<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input name="cpassword" type="password" class="form-control" id="pass2" required>
						<div id="pass_error" class="val_error"></div>
						</div>
					</div>

					
					

					<div class="form-group" style="text-align: center">
						<input name="submit_btn" type="submit" value="Submit" id="contactbtn" class="btn btn-default"/>
						
					</div>

				</form>
                
                <?php
                   if(isset($_POST['submit_btn']))
                   {
                       //echo '<script type="text/javascript"> alert("Sign up button clicked") </script>';
                       $username = $_POST['username'];
                       $password = $_POST['password'];
                       $cpassword = $_POST['cpassword'];
                       
                       if($password==$cpassword)
                       {
                           $query= "select * from user_info where Username= '$username' ";
                           
                           $query_run = mysqli_query($con,$query);
                           
                           if(mysqli_num_rows($query_run)>0)
                           {
                               echo '<script type="text/javascript"> alert("This username has been taken already") </script>';
                           }
                           else
                           {
                               $query = "insert into user_info values('$username','$password')";
                               $query_run = mysqli_query($con,$query);
                               
                               if($query_run)
                               {
                                 echo '<script type="text/javascript"> alert("Signing up completed.") </script>';  
                               }
                               else
                               {
                                  echo '<script type="text/javascript"> alert("Error occured") </script>'; 
                               }
                           }
                       }
                       
                       else
                       {
                           echo '<script type="text/javascript"> alert("Password doesnot match") </script>';
                       }
                       
                   }
                ?>
			</div>

		</div>
<!--Including jQuery

if(isset($_POST['submit_btn']))
                    {
                        echo '<script type="text/javascript"> alert("Sign up button clicked") </script>';
                    }

<div class="form-group">
						<label for="name">Name</label>
						<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" class="form-control" id="name" placeholder="Full Name">
						<div id="name_error" class="val_error"></div>
						</div>
					</div>
<div class="form-group">
						<label for="bday">Birthday</label>
						 <div class="input-group">
  						 
						<input type="text" class="form-control" id="bday" placeholder="DD/MM/YYYY">
						<div id="bday_error" class="val_error"></div>
						</div>
					</div>
<div class="form-group">
						
						<label for="gen">Gender</label><br>
						<label class="radio-inline">
						<input type="radio" name="optradio">Male</label>
						<label class="radio-inline">
						<input type="radio" name="optradio">Female</label>
						<label class="radio-inline">
						<input type="radio" name="optradio">Other</label>
					</div>

					<div class="form-group">
						<label for="mob">Mobile Number</label>
						<input type="text" class="form-control" id="mob">
						<div id="mob_error" class="val_error"></div>
					</div>

					<div class="form-group">
						<label for="add">Address</label>
						<input type="text" class="form-control" id="add">
						<div id="add_error" class="val_error"></div>
					</div>
-->
<script src="js/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="js/main.js"></script>

</body>
</html>