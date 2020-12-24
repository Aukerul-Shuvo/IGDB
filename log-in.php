<?php
    session_start();
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
		<head lang="en">
			 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
      <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="CustomStyle.css">
      <link rel="stylesheet" href="bootstrap/css/glyphicon.css">
      <link rel="stylesheet" href="gallery.css">
    <title>IGDB</title>
            <link rel="stylesheet" href="lay.css">
            <link rel="stylesheet" href="log-in-style.css">
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
                            
                            <div class="input-group-btn">
                                
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
		
		<section class="wrapper">
			<div class="sec-elem">
			<h3>Log in helps you to give REVIEW!</h3>
            
			<form action="" id="contactform" method="POST" role="form" onsubmit()="return Validate()" name="vform">
				<div class="form-group">
						<label for="username">Enter your Username</label>
						<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input name="username" type="text" class="form-control" id="username" placeholder="abc" required>
						<div id="email_error" class="val_error"></div>
						</div>
					</div>
				<div class="form-group">
						<label for="pass">Enter your password</label>
						<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input name="password" type="password" class="form-control" id="pass" required>
						</div>
					</div>
				<div class="form-group" style="text-align: center">
						<input name="login" type="submit" value="Submit" id="contactbtn" class="btn btn-default"/>
						
					</div>
			</form>
                
                <?php
                
                if(isset($_POST['login']))
                {
                    //echo '<script type="text/javascript"> alert("pressed") </script>';
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $query= "select * from user_info where Username= '$username' and password='$password' ";
                    $query_run = mysqli_query($con,$query);
                    
                    if(mysqli_num_rows($query_run)>0)
                           {
                               //valid
                                $_SESSION['username']= $username;
                                //echo '<script type="text/javascript"> alert("Access granted") </script>';
                                header('location:after-log-in.php');
                           }
                    else
                    {
                        echo '<script type="text/javascript"> alert("Username or Password is wrong") </script>';
                    }
                }
                
                
                ?>
			
			
		</div>
		</section>
		
	</body>
</html>
        
       

    <!-- Optional JavaScript
 
-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js" ></script>
  </body>
</html>


<!-- 
<div class="col-md-3">
            
            </div>
-->