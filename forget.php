<?php include'class/database.php'; ?>
<?php
    $db=new Database();
    if(isset($_POST['submit'])){
        $email=mysqli_real_escape_string($db->link,$_POST['email']);	
        $pass=mysqli_real_escape_string($db->link,$_POST['newPassword']);
        $conpass=mysqli_real_escape_string($db->link,$_POST['conPassword']);
        if($pass!=$conpass){
            $error = "pass not match";
        } elseif(strlen($pass)<8){
            $error = "pass is too short";
        } else{
            $query= "select *from  registration  where email= '$email' limit 1";
            $select= $db->select($query);
            if($select!=true){
                $error = "No account on this email";
            } else{
                $update="update registration set password='$pass' where email='$email'";
                $create=$db->update($update);
            }
        } 
        if(isset($error)){
            echo "<span style='color:red'>".$error."</span>";
        } else{
            header("location:login.php");
        }

    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <?php include'asset/style.php'; ?>
    <title>Document</title>
</head>

<body>
    <section class="d-flex justify-content-center align-items-center">
        <div class="m-5 border border-4 rounded p-5">
            <h4
                class="border border-4 rounder d-flex justify-content-center align-items-center mb-5 p-2 bg-success text-light">
                Forget your Password</h4>


            <form action="" class="box-design" method="POST">
                <table>
                    <tr>
                        <td>Email: </td>
                        <td><input type="text" class="rounded" name="email"></td>
                    </tr>

                    <tr>
                        <td>Password: </td>
                        <td><input type="password" class="rounded" name="newPassword"></td>
                    </tr>

                    <tr>
                        <td>Confirm Password: </td>
                        <td><input type="password" class="rounded" name="conPassword"></td>
                    </tr>
                </table>
                    <!-- Butoons of registration form -->
                    <div class="mt-3 p-2">

                        <div class="d-flex justify-content-center mb-3">
                            <button class="rounded w-50 mt-2 btn btn-success" name="submit">Submit</button>
                        </div>

                        <div class="d-flex justify-content-center">
                            <p class="me-2">Have an account?</p>
                            <a href="login.php" class="text-decoration-none ">Login</a>
                        </div>
                    </div>

            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>