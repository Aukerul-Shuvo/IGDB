<?php
    session_start();
    require 'dbconfig/config.php';
    $searchq= $_SESSION['searching_text'];
    $username= $_SESSION['username'];
    $c=1;
$urated=0;
?>

<!DOCTYPE html>
<html>
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
        
        <?php
        $sql = "SELECT * FROM game_info WHERE Game_Name like '%$searchq%' or Genre like '%$searchq%'
        
        ; ";
        $result = mysqli_query($con,$sql);
        $resultcheck = mysqli_num_rows($result);
        
        if($resultcheck > 0)
        {
            while ($row = mysqli_fetch_assoc($result))
            {
                $gid = $row['Game_ID'];
                $gname = $row['Game_Name'];
                $gphoto = $row['Game_photo'];
                $gdate = $row['Releasing_date'];
                $ggenre = $row['Genre'];
                $gplatforms = $row['Platforms'];
                $gstory = $row['Game_story'];
                $grating = $row['Rating'];
                ?>
                <section class="result">
                    <div class="container">
                        <div class="row">
                        <h2><br> <?php echo $gname; ?>  </h2>
                        </div>
                         <div class="row">
             <img class="img-fluid image" src="<?php echo $gphoto;  ?>" >
            </div>
            <div class="row">
               <h5><br>Releasing Date: <?php echo $gdate;  ?> </h5> 
            
            </div>
            <div class="row">
                <h5><br>Genre: <?php echo $ggenre;  ?> </h5>
            </div>
            
            <div class="row">
                <h5><br>Platforms: <?php echo $gplatforms;  ?> </h5>
            </div>
            
            <div class="row">
                <h5><br>Story:  </h5> <h6><?php echo $gstory;  ?></h6>
            </div>
            
            <div class="row">
                <h5><br>Rating: <?php echo $grating;  ?> <br><br> </h5>
            </div>
        <div>
           <?php
               $sqlrr= "SELECT * from u_r WHERE Username='$username' AND Game_ID=$gid;";
                $resultrr = mysqli_query($con,$sqlrr);
                $resultcheckrr = mysqli_num_rows($resultrr);
                if($resultcheckrr > 0)
                {
                    while ($rowrr = mysqli_fetch_assoc($resultrr))
                    {
                        $urated = $rowrr['ratedd'];
                        
                    }
                }
                ?>
            <form class="form-inline navbar-form" method="post">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Give Rating" name="rating">
                            <div class="form-group" style="text-align: center">
						<input name="rating_btn" type="submit" value="Rate it" id="contactbtn" class="btn btn-link"/>
						
					</div>
                            </div>
                        </form>  
            <?php 
                if($urated == 1)
                {
                   $msg='You have already rated this game!';
                    echo  $msg;
                }
                ?>
            <?php
                   if(isset($_POST['rating_btn']))
                   {
                       
                       
                      $rating = $_POST['rating'];
                       if($rating>10.0)
                       {
                           echo '<script type="text/javascript"> alert("Invalid rating") </script>';
                       }
                       else if($rating<0.0)
                       {
                           echo '<script type="text/javascript"> alert("Invalid rating") </script>';
                       }
                       else
                       {
                           if( $urated!=1)
                           {
                               $rating= ($rating+$grating)/2;
                           $sqlr= "Update game_info set Rating=$rating where Game_ID=$gid;";
                           $resultr = mysqli_query($con,$sqlr);
                           
                          $sqlrrr= "insert into u_r values ('$username',$gid,1);";
                            $resultrrr = mysqli_query($con,$sqlrrr); 
                               
                           }
                           
                       }
                   }
                       
                           
                
                ?>
                        </div>
                    </div>
                </section>
               
                <?php
                
            }
        }
        else
        {
            echo 'Found Nothing';
        }
        ?>
        
        <section class="result">
                    <div class="container">
                        <div class="row">
                            
                            <h5 style="color:blueviolet"><br> Recommendations: </h5>
                                
                        </div>
                    </div>
                </section>
        
        
        
        <?php
        $sql = "SELECT * FROM game_info WHERE Genre like '%$ggenre%' and Game_Name not like '%$searchq%' ; ";
        $sql1 = "SELECT game_genre.gen from game_genre where game_genre.Game_ID=$gid ;";
        $result = mysqli_query($con,$sql);
        $result1 = mysqli_query($con,$sql1);
        $resultcheck = mysqli_num_rows($result);
        $resultcheck1 = mysqli_num_rows($result1);
        
        
        
        
         if($resultcheck1 > 0)
        {
            while ($row = mysqli_fetch_assoc($result1))
            {
                $ggen = $row['gen'];
                $sql2 = "SELECT * FROM game_info WHERE Genre like '%$ggen%' and Game_Name not like '%$searchq%' ; ";
                $result2 = mysqli_query($con,$sql2);
                $resultcheck2 = mysqli_num_rows($result2);
                
                 if($resultcheck2 > 0)
        {
            while ($row = mysqli_fetch_assoc($result2))
            {
                $gname = $row['Game_Name'];
                
                ?>
                <section class="result">
                    <div class="container">
                        <div class="row">
                            <a href="searched_result.php?name=<?php echo $gname; ?>" style="color:#010172">
                            <h5><br> <?php echo $gname; ?>  </h5>
                            </a>
                       
                             
                        </div>
                        
            
            
            
           
            
            
            
            
                    </div>
                </section>
               
                <?php
                
            }
        }
                
                
                
            }
        }
        
        
        ?>
        
        
    
    </body>
    
</html>