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
    
    <div class="d-flex justify-content-center">
        <div class="border border-danger m-5 p-5 d-flex justify-content-center h-75 w-50"> 
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
            <form method="POST" action="">
                <h3 class="d-flex justify-content-center" id="bg-design">Login</h3>
                <br>
                <label for="username">Username :</label>
                <br>
                <input class="form-control" type="text" name="username">
        
                <br>
                <br>
                <br>
        
                <label for="password">Password :</label>
                <br>
                <input class="form-control" type="password" name="password">
    
                <br>
                <br>
                <br>
    
                <button class="d-flex justify-content-center btn btn-outline-success mx-auto mb-3" id="login-submit" name="submit">Submit</button>
                
        
            </form>
        </div>
    </div>
    <!--Bootstrap script linkup-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>