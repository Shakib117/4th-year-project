<!--$con_regex = "/(\+88)?-?01[3-9]\d{8}/";-->

<?php 
	include 'inc/header.php';
	include 'Database.php';
	?>
    <?php
	    $db=new Database();
	    if(isset($_POST['submit'])){
		$firstname=mysqli_real_escape_string($db->link,$_POST['firstname']);
		$lastname=mysqli_real_escape_string($db->link,$_POST['lastname']);
		$username=mysqli_real_escape_string($db->link,$_POST['username']);
		$email=mysqli_real_escape_string($db->link,$_POST['email']);	
		$pass=mysqli_real_escape_string($db->link,$_POST['password']);
		$conpass=mysqli_real_escape_string($db->link,$_POST['conpassword']);
		$contact=mysqli_real_escape_string($db->link,$_POST['contact']);
		if($pass!=$conpass){
			$error = "pass not match";
		}
		elseif(strlen($pass)<8){
			$error = "pass is too short";
		}elseif($lastname == '' || $firstname =='' || $username=='' || $email =='' || $pass =='' || $conpass =='' || $contact==''){
			  $error = "Field must not be Empty !!"; 
		}else{
			  $emailquery= "select *from  registration  where email= '$email' limit 1";
			   $mailcheck= $db->select($emailquery);
			  if($mailcheck != false){
				  $error = "email already exist";
			  }else{
				  $query="INSERT INTO registration(username,firstname, lastname, email, password, contact) 
                   VALUES('$username','$firstname', '$lastname', '$email', '$pass', '$contact')";
				    $create = $db->insert($query);
			  }
		}
	
	}
	?>
	<?php 
    if(isset($error)){
     echo "<span style='color:red'>".$error."</span>";
    }
    ?>

	<?php 
    if(isset($_GET['msg'])){
     echo "<span style='color:green'>".$_GET['msg']."</span>";
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <?php include'asset/style.php'; ?>
</head>
<body>
    <br>
    <br>
    <br>
    
    <div class="d-flex justify-content-center">
        <div class="border border-danger m-5 p-5 d-flex justify-content-center h-25 w-50">
            
            <form action="" method="POST">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="d-flex justify-content-center mx-auto mb-3 border border-light" id="bg-design">Register Now!</h3>

                            <label for="uname"><b>Username :</b></label>
                            <input class="form-control mb-3" type="text" name="uname" required>

                            <label for="fname"><b>First Name :</b></label>
                            <input class="form-control mb-3" type="text" name="fname" required>
                            
                            <label for="lname"><b>Last Name :</b></label>
                            <input class="form-control mb-3" type="text" name="lname" required>

                            <label for="email"><b>Email :</b></label>
                            <input class="form-control mb-3" type="email" name="email" required>
                
                            <label for="password"><b>Password :</b></label>
                            <input class="form-control mb-3" type="password" name="password" required>

                            <label for="conpassword"><b>Confirm Password :</b></label>
                            <input class="form-control mb-3" type="password" name="conpassword" required>

                            <label for="contact"><b>Contact :</b></label>
                            <input class="form-control mb-3" type="text" name="contact" required>
                
                            <button class="d-flex justify-content-center btn btn-outline-success mx-auto mb-3" id="" name="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--Bootstrap script linkup-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>