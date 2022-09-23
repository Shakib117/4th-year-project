<!doctype html>
<?php include"inc/header.php"?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="asset/contact.css">
    <style>
        header{
            background: rgb(41, 38, 38);
        }
    </style>

    <title>contact</title>
</head>

<body>

    <!-- contact start -->
    <section class="contact" id="contact">
        <div class="row">

            <div class=" d-flex gap-5">

                <div class="image">
                    <img src="img/plane.png" alt="">
                </div>

                <div>
                    <form action="">
                        <div class="inputBox">
                            <input type="text" placeholder="name">

                            <input type="email" placeholder="email">
                        </div>
                        <div class="inputBox">
                            <input type="text" placeholder="number">

                            <input type="text" placeholder="subject">
                        </div>
                        <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
                        <input type="submit" class="btn-con" value="send message">
                    </form>
                </div>

            </div>


        </div>



    </section>
    <!-- contact ends -->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>