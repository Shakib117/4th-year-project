<?php    
    include'inc/header.php';
?>
<head>
    <style>
        .bg_img{
            background-image: url(asset/bg_img.jpg);
            position: relative;
            background-repeat: no-repeat;
            /* text-align: center; */
            background-size: cover;
            /* background-position: center;  */
            width: 100%;
            /* height: 100%;  */
            /* z-index: 1; */
        }
        .bg_img:before {
            position: absolute;
            content: "";
            width: 100%;
            height: 100%;
            left: 0px;
            top: 0px;
            /* background-color: black; */
            /* opacity: .7; */
            /* z-index: -1; */
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="bg_img">
            <div class=""> <!-- bg_img_content -->
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
</body>

<?php    
    include'inc/footer.php';
?>