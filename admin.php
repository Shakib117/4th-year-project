<!DOCTYPE html>
<html lang="en">
<?php 
include 'lib/session.php';
Session:: init();


?>
 <?php include 'lib/database.php';?>
 <?php $db=new Database ;?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Portal||Admin</title>
    <link rel="stylesheet" href="design.css"/>
    <link rel="stylesheet" href="Responsive.css"/>
</head>
<body>


<?php 
	     if($_SERVER['REQUEST_METHOD'] =='POST'){
	       $username= mysqli_real_escape_string($db->link, $_POST['user_name']);
		  
		   $password= mysqli_real_escape_string( $db->link,$_POST['password']);
		   $query= "SELECT * FROM  user WHERE user_name='$username' AND password= '$password' ";
		   $result= $db->select($query);
		    if($result != false){
				$value=$result->fetch_array();
				 Session::set("login",true);
				 Session::set("username",$value['user_name']);
				 Session::set("password",$value['password']);
				 header("Location:index.php");
			}else{
				echo   "<script>alert('user name or password not match')</script>";
			}
	
		  }
	
	
	?>
	






    <div class="sign-area">
        <div class="border">
            <div class="sign">
                <div class="sign-info">
                    <h1>news portal</h1>
                    <h2>admin login</h2>
                  <h4 style="text-align:center;padding:15px;">if not register?<a href="registration.php">regidtration here</a></h4>
                </div>
                <div class="log fix">
                    <form action="" method="post">
                    <input type="text" name="user_name" placeholder="Email or User Name"/>
                    
                    <img src="images/log1.png" alt="log">
                    <h3> <a href="">forget your password?</a></h3>
                  
                        <input type="password" name="password" placeholder="Your Password"/>
                    
                    <img src="images/log.png" alt="log">
                    <h4><a href="">back home</a></h4>
                
                        <input type="submit" value="log in"/>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>