<?php
    session_start();
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
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
  </head>
  
    <body>
            <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="after-log-in.php">IGDB</a>
                </div>
                <div>
                <ul class="nav navbar-nav navbar-center">
                    <li>
                        <form class="form-inline navbar-form" method="post">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Search" name="searching_text">
                            <div class="form-group" style="text-align: center">
						<input name="search_btn" type="submit" value="Search" id="contactbtn" class="btn btn-link"/>
						
					</div>
                            </div>
                        </form>  
                        
                              <?php
                   if(isset($_POST['search_btn']))
                   {
                       //echo '<script type="text/javascript"> alert("Sign up button clicked") </script>';
                       $searching_text = $_POST['searching_text'];
                      
                       $_SESSION['searching_text']= $searching_text;
                       
                       header('location:result.php');
                       
                   }
                       
                           
                
                ?>
                    </li>
                    </ul>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right navbar-dark">
                        <li>
                        <input name="user" type="submit" value=<?php echo $_SESSION['username']  ?> id="contatbtn" class="btn btn-link"/>
                            
                        </li>
                        
                        <li>
                            <form name="myform" action="after-log-in.php" method="post">
                             <input name="logout" type="submit" value="Log Out" id="contatbtn" class="btn btn-link" />
                            </form>
                       
                          
                        </li>
                         
                    </ul>
                   <?php
            if(isset($_POST['logout']))
            {
                echo '<script type="text/javascript"> alert("logout pressed") </script>';
                session_destroy();
                header('location:index.php');
            }
                
    
    
    
    ?>   
                </div>
                
                
            </div>
        </nav>
        
     
        
        
        
        <section class="gallery-block compact-gallery">
    	<div class="container">
            
            <div class="row">
                <br>
                <h1> Guide yourself to play!</h1>
            </div>
    		<div class="headding-left">
    			<br><br><h2>Most Popular Games of all time</h2><br>
    		</div>
    		
    		<div class="row no-gutters">
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <?php  $gname= 'Grand Theft Auto'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>" >
    					<img class="img-fluid image" src="resources/img/GTA%20V.jpg">
    					<span class="description">
    						<span class="description-heading">Grand Theft Auto</span>
    						<span class="description-body"></span>
    					</span>
    				</a>
    			</div>
    			
    			
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
    				<?php  $gname= 'League Of Legends'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>" >
    					<img class="img-fluid image" src="resources/img/League%20of%20legends.png">
    					<span class="description">
    						<span class="description-heading">League Of Legends</span>
    						<span class="description-body"></span>
    					</span>
    				</a>
    			</div>
    			
    			
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
    				<?php  $gname= 'Red Dead Redemption'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>" >
    					<img class="img-fluid image" src="resources/img/Red%20dead%20redemptioncropped-1920-1133-80468.jpg">
    					<span class="description">
    						<span class="description-heading">Red Dead Redemption</span>
    						<span class="description-body"></span>
    					</span>
    				</a>
    			</div>
    			
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
    				<?php  $gname= 'Minecraft'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>" >
    					<img class="img-fluid image" src="resources/img/minecraft-cropped-1920-1133-370408.png">
    					<span class="description">
    						<span class="description-heading">Minecraft</span>
    						<span class="description-body"></span>
    					</span>
    				</a>
    			</div>
    			
    			
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
    				<?php  $gname= 'Pacman'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>" >
    					<img class="img-fluid image" src="resources/img/pacman-cropped-1920-1133-89741.jpg">
    					<span class="description">
    						<span class="description-heading">Pacman</span>
    						<span class="description-body"></span>
    					</span>
    				</a>
    			</div>
    			
    			
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
    				<?php  $gname= 'Counter Strike'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>" >
    					<img class="img-fluid image" src="resources/img/couter%20strike%20cropped-1920-1133-587593.png">
    					<span class="description">
    						<span class="description-heading">Counter Strike</span>
    						<span class="description-body"></span>
    					</span>
    				</a>
    			</div>
    			
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
    				<?php  $gname= 'Skyrim'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>" >
    					<img class="img-fluid image" src="resources/img/skyrim-cropped-1920-1133-322551.jpg">
    					<span class="description">
    						<span class="description-heading">Skyrim</span>
    						<span class="description-body"></span>
    					</span>
    				</a>
    			</div>
    			
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
    				<?php  $gname= 'Super Mario Bros'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>" >
    					<img class="img-fluid image" src="resources/img/super%20mario%20broscropped-1920-1133-645966.png">
    					<span class="description">
    						<span class="description-heading">Super Mario Bros</span>
    						<span class="description-body"></span>
    					</span>
    				</a>
    			</div>
    			
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
    				<?php  $gname= 'Call Of Duty'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>" >
    					<img class="img-fluid image" src="resources/img/call%20of%20duty-cropped-1920-1133-78443.jpg">
    					<span class="description">
    						<span class="description-heading">Call Of Duty</span>
    						<span class="description-body"></span>
    					</span>
    				</a>
    			</div>
    		</div>
    	</div>
    </section>
        
        
     <!--Latest-->  
      <section class="gallery-block compact-gallery">
    	<div class="container">
            
            
    		<div class="headding-left">
    			<br><br><br><br><h2>What to play right now</h2><br>
    		</div>
    		
    		<div class="row no-gutters">
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
    				<?php  $gname= 'Apex Legends'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>" >
    					<img class="img-fluid image" src="resources/img/Apex%20Legends.jpg">
    					<span class="description">
    						<span class="description-heading">Apex Legends</span>
    						<span class="description-body"></span>
    					</span>
    				</a>
    			</div>
    			
    			
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
    				<?php  $gname= 'Anno 1800'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>" >
    					<img class="img-fluid image" src="resources/img/Anno1800-cropped-1920-1080-1021943.jpg">
    					<span class="description">
    						<span class="description-heading">Anno 1800</span>
    						<span class="description-body"></span>
    					</span>
    				</a>
    			</div>
    			
    			
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <?php  $gname= 'Counter Strike: Global Offense'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>">
    					<img class="img-fluid image" src="resources/img/Cs%20go.png">
    					<span class="description">
    						<span class="description-heading">Counter Strike: Global Offense</span>
    						<span class="description-body"></span>
    					</span>
    				</a>
    			</div>
    			
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
                     <?php  $gname= 'Yakuza Kiwami 2'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>">
    					<img class="img-fluid image" src="resources/img/Yakuza%20Kiwami%202.jpg">
    					<span class="description">
    						<span class="description-heading">Yakuza Kiwami 2</span>
    						<span class="description-body"></span>
    					</span>
    				</a>
    			</div>
    			
    			
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <?php  $gname= 'Rainbow Six Siege'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>">
    					<img class="img-fluid image" src="resources/img/Rainbow%20Six%20Siege.jpg">
    					<span class="description">
    						<span class="description-heading">Rainbow Six Siege</span>
    						<span class="description-body"></span>
    					</span>
    				</a>
    			</div>
    			
    			
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <?php  $gname= 'Sekiro: Shadows Die Twice'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>">
    					<img class="img-fluid image" src="resources/img/sekiro-shadows%20die%20twicecropped-1920-1080-1001341.jpg">
    					<span class="description">
    						<span class="description-heading">Sekiro: Shadows Die Twice</span>
    						<span class="description-body"></span>
    					</span>
    				</a>
    			</div>
    			
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <?php  $gname= 'Warframe'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>">
    					<img class="img-fluid image" src="resources/img/Warframe.jpg">
    					<span class="description">
    						<span class="description-heading">Warframe</span>
    						<span class="description-body"></span>
    					</span>
    				</a>
    			</div>
    			
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <?php  $gname= 'Slay The Spire'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>">
    					<img class="img-fluid image" src="resources/img/Slay%20the%20spire.jpg">
    					<span class="description">
    						<span class="description-heading">Slay The Spire</span>
    						<span class="description-body"></span>
    					</span>
    				</a>
    			</div>
    			
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <?php  $gname= 'The Division 2'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>">
    					<img class="img-fluid image" src="resources/img/The%20Division%202.jpg">
    					<span class="description">
    						<span class="description-heading">The Division 2</span>
    						<span class="description-body"></span>
    					</span>
    				</a>
    			</div>
    		</div>
    	</div>
    </section>  
        
        
        
     <!-- Top Rated PC games -->
         <section class="gallery-block compact-gallery">
    	<div class="container">
            
            
    		<div class="headding-left">
    			<br><br><br><br><h2>Top Rated Games For PC</h2><br>
    		</div>
    		
    		<div class="row no-gutters">
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <?php  $gname= 'Team Sonic Racing'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>">
    					<img class="img-fluid image" src="resources/img/team%20sonic%20racing.jpg">
    					<span class="description">
    						<span class="description-heading">Team Sonic Racing</span>
    						<span class="description-body">Rating: 9.0</span>
    					</span>
    				</a>
    			</div>
    			
    			
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <?php  $gname= 'Marvel Ultimate Alliance 3: The Black Order'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>">
    					<img class="img-fluid image" src="resources/img/marvel%20ultimate%20aliance.jpg">
    					<span class="description">
    						<span class="description-heading">Marvel Ultimate Alliance 3: The Black Order</span>
    						<span class="description-body">Rating: 8.0</span>
    					</span>
    				</a>
    			</div>
    			
    			
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <?php  $gname= 'Outer Wilds'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>">
    					<img class="img-fluid image" src="resources/img/outer%20wilds.jpg">
    					<span class="description">
    						<span class="description-heading">Outer Wilds</span>
    						<span class="description-body">Rating: 8.9</span>
    					</span>
    				</a>
    			</div>
    			
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <?php  $gname= 'Tom Clancys The Division 2'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>">
    					<img class="img-fluid image" src="resources/img/the%20division%202%20(2).jpg">
    					<span class="description">
    						<span class="description-heading">Tom Clancy's The Division 2</span>
    						<span class="description-body">Rating: 8.1</span>
    					</span>
    				</a>
    			</div>
    			
    			
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <?php  $gname= 'Devil MAy Cry 5'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>">
    					<img class="img-fluid image" src="resources/img/devilmaycry5.png">
    					<span class="description">
    						<span class="description-heading">Devil MAy Cry 5</span>
    						<span class="description-body">Rating: 8.1</span>
    					</span>
    				</a>
    			</div>
    			
    			
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <?php  $gname= 'Sekiro: Shadows Die Twice'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>">
    					<img class="img-fluid image" src="resources/img/sekiro-shadows%20die%20twicecropped-1920-1080-1001341.jpg">
    					<span class="description">
    						<span class="description-heading">Sekiro: Shadows Die Twice</span>
    						<span class="description-body">Rating: 7.5</span>
    					</span>
    				</a>
    			</div>
    			
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <?php  $gname= 'Apex Legends'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>">
    					<img class="img-fluid image" src="resources/img/Apex%20Legends.jpg">
    					<span class="description">
    						<span class="description-heading">Apex Legends</span>
    						<span class="description-body">Rating: 7.5</span>
    					</span>
    				</a>
    			</div>
    			
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <?php  $gname= 'Mortal Combat X'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>">
    					<img class="img-fluid image" src="resources/img/mortalcombatX.jpg">
    					<span class="description">
    						<span class="description-heading">Mortal Combat X</span>
    						<span class="description-body">Rating: 7.1</span>
    					</span>
    				</a>
    			</div>
    			
    			<div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <?php  $gname= 'Super Mario Maker 2'; ?>
    				<a class="lightbox" href="searched_result.php?name=<?php echo $gname; ?>">
    					<img class="img-fluid image" src="resources/img/supermariomaker2.png">
    					<span class="description">
    						<span class="description-heading">Super Mario Maker 2</span>
    						<span class="description-body">Rating: 8.6</span>
    					</span>
    				</a>
    			</div>
    		</div>
    	</div>
    </section> 

        
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js" ></script>
         <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
	      baguetteBox.run('.compact-gallery',{animation:'slideIn'});
	  </script>
  </body>
</html>



<!--




search box
<li><a href=""><?php echo $_SESSION['username']  ?></a></li>
                        <li><a href="">Log Out</a></li>

 <form action="" class="navbar-form">
                <div class="form-group has-feedback">
                    <input type="text" placeholder="Search" class="form-control">
                    
                    
                 </div>
                        
                </form>           
           











search icon
<a href="log-in.html" class="btn btn-primary btn-block"></a>





<form action="" class="navbar-form">
                <div class="form-group has-feedback">
                    <input type="text" placeholder="Search" class="form-control">Search
                    <span class="glyphicon glyphicon-search"></span>
                    
                 </div>
                        
                </form>

<span class="glyphicon glyphicon-search"></span>
-->