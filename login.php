<?php 
	include 'lib/session.php';
	Session::init(); 
	include 'class/database.php';
 	$db= new Database(); 
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <?php include'asset/style.php'; ?>
</head>
<body>
    <br>
    <br>
    <br>
    
    <section class="d-flex justify-content-center align-items-center">
        <div >
            <div class="m-5">
                <h1 class="text-primary h1-design">Adventure BD</h1>
                <h4><b>Join with us and make a best memory!!!</b></h4>
            </div>
        </div>

        <div class="m-5 border rounded border-3 p-5">
            <?php 
                if($_SERVER['REQUEST_METHOD'] =='POST'){
                $username= mysqli_real_escape_string($db->link, $_POST['username']);
                $password= mysqli_real_escape_string( $db->link,$_POST['password']);

                $query= "SELECT * FROM  registration WHERE username='$username' AND password= '$password' ";
                $result= $db->select($query);
                    if($result != false){
                        $value=$result->fetch_array();
                        Session::set("login",true);
                        Session::set("username",$value['username']);
                        Session::set("password",$value['password']);
                        Session::set("usertype",$value['usertype']);
                        header("Location:index.php");
                    }else{
                        echo   "<span>'user name or password not match'</span>";
                    }
            
                }
            ?>
        
            <form action="" method="POST">
				
                <input class="form-control" type="text" name="username" placeholder="Enter your username">
				<br/>
                <input class="form-control" type="password" name="password" placeholder="Enter your password">
                <!-- Buttons of Login form -->

                <div class="mt-3 p-2">

				<div class="d-flex justify-content-center">
					<button class="rounded w-50 btn btn-primary"><a href="" class="text-decoration-none text-white">Log In</a></button>
				</div>    

                <div class="d-flex justify-content-center pt-1 pb-1">
                    <a href="forget.php" class="text-decoration-none"> Forgot your Password?</a>
                </div>

                <hr/>   

                <div class="d-flex justify-content-center">
                    <button class="rounded btn btn-success mt-2"><a href="registration.php" class="text-decoration-none text-white">Create a New Account</a></button>
                </div>
                

                </div>
            </form>
        </div>
    </section>
    <!--Bootstrap script linkup-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>