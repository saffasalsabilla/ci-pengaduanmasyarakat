<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Registrasi</title>

    <style>

        body{
            overflow: hidden;
        }

        .navbar {
            background-color: #383F40;
            
        }
    
        #card{
            border-radius: 8px;
            box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
            width: 450px;
            height: 480px;
            margin-top: 2%;
            margin-left: 10%;
            background-color: info;
        }
        #card-content {
            padding: 6x 44px;
        }
        #card-title {
            font-family: "Raleway Thin", sans-serif;
            letter-spacing: 5px;
            padding-bottom: 24px;
            padding-top: -3%;
            text-align: center;
        }

        img{
            width: 40%;
            height: 20%;
            margin-left: 60%;
            margin-top: -40%;
        }


    </style>

  </head>

  <body>

    <nav class="navbar">
        <a class="navbar-brand" href="" style="color: white;">Complaint Yuk</a>
    </nav>

    <div id="card">
            <div id="card-content">
                <div id="card-title">
                    <h2>Register</h2>
                    <div class="underline-title"></div>
                </div>
            </div>
            <form action="<?php echo site_url('registrasi/insert');?>" method="POST" enctype="multipart/form-data" style="margin-top: -9%;" >

            <div class="form-group" style="width: 60%; margin-left: 10%;">
                <label for="exampleInputEmail1">NIK</label>
                <input name="nik" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="form-group" style="width: 60%; margin-left: 10%;">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="form-group" style="width: 60%; margin-left: 10%;">
                <label for="exampleInputEmail1">Username</label>
                <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group" style="width: 60%; margin-left: 10%;">
                <label for="exampleInputEmail1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group" style="width: 60%; margin-left: 10%;">
                <label for="exampleInputPassword1">Telepon</label>
                <input name="telepon" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-info" style="margin-left: 77%; margin-top: -14%;">Submit</button>
            </form>
    </div>



        <img src="asset/reg.jpg" alt="">

        




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>