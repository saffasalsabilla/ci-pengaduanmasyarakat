<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .body {
            overflow: hidden;
            background: #ba7967;
            margin-top: -15px;
        }

        /* .navbar {
            background-color: #383F40;
            
        } */

        img{
            width: 40%;
            height: 30%;
            margin-left: 11%;
            margin-top: 3%;
        }


        .form-control {
            width: 20%;
            margin-left: 60%;
            margin-top: -30%;
        }

        .btn {
            margin-top: 5%;
            margin-left: 40%;
            border: 0;
            background: #5e6f64;
            border-radius: 0.6em;
            padding: 0.8em 2.5em;
        }

        h6{
            margin-left: 60%;
            margin-top: -7%;
        }

        a{
            margin-left: 68%;
            margin-top: -7%;
        }

        .back{
            width: 3%;
            height: 2%;
            margin-top: -35%;
            margin-left: 1%;
        }

    </style>
</head>

<body style="overflow: hidden;">
    <!-- <nav class="navbar">
        <a class="navbar-brand" href="#" style="color: white;">Complaint Yuk</a>
    </nav> -->

    <img src="asset/back.png" alt="" class="back">

    <img src="asset/gin.jpg" alt="">

    <div class="contain text-center">
        <br><br>
        <form action="<?php echo site_url('sistem/aksi_login')?>" method="post">
            <input type="text" class="form-control" name="email" placeholder="Username/Email"><br>
            <input type="password" class="form-control" style="margin-top: 8px;" name="password" placeholder="Password">
            <button type="submit" class="btn">Login</button>
        </form>
    </div>

    <h6>Dont Have Account? Please Register</h6>
    <a href="#">Register</a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>