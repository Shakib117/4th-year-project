<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <?php include'asset/style.php'; ?>
    <title>4th Year Project</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-drak nav-op">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">NavLogo</a>
        
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 nav-hov">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link active" href="#">Services</a> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="hotel.php">Hotel & Resort</a></li>
                                <li><a class="dropdown-item" href="food.php">Food</a></li>
                            </ul>
                        </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Book Travel</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button type="button" class="btn btn-outline-success mx-auto mx-lg-2"> 
                        <a href="login.php" class="text-decoration-none" style="color:inherit">Login</a>
                    </button>
                    <button type="button" class="btn btn-outline-success mx-auto mx-lg-2"> 
                        <a href="registration.php" class="text-decoration-none" style="color:inherit">Signup</a>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>