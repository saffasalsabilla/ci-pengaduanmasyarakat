<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Form Pengaduan</title>

    <style>

        body{}
    
        .navbar {
            background-color: #383F40; 
            
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            /* background-color: #FF0000; */
}

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 1px 16px;
            text-decoration: none;
            font-family: "Times New Roman", Times, serif;
            font-size: 20px;
        }

        li a:hover {
            background-color: #FFFFFF;
        }

        h6{
            margin-top: 2%;
            margin-left: 3%;
        }

        .dropdown{
            margin-top: 1%;
            margin-left: 3%;
           
        }

       .tgl{
           margin-left: 3%;
       }

       #isi{
           margin-left: 3%;
       }

       .login {
            margin-top: -18%;
            margin-left: 5%;
            border: 0;
            background: #5e6f64;
            border-radius: 0.6em;
            padding: 0.5em 1.8em;
        }

    </style>

  </head>
  
  <body>
    
    <nav class="navbar">
        <a class="navbar-brand" href="#" style="color: white;">Complaint Yuk</a>
        <ul>
            <li><a href="#beranda">Home</a></li>
            <li><a href="#berita">Berita</a></li>
            <li><a href="#kontak">Logout</a></li>
        </ul>
    </nav>

    <h6>Kategori</h6>

    <div class="dropdown">
        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Kategori Pengaduan
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Kementrian Kesehatan</a>
            <a class="dropdown-item" href="#">Kementrian Pendidikan dan Kebudayaan</a>
            <a class="dropdown-item" href="#">Kementrian Perhubungan</a>
        </div>
    </div>

    <h6>Tanggal Lapor</h6>
    <input type="text" class="tgl">

    <h6>Isi Laporan</h6>
    <textarea name="" id="isi" cols="50" rows="8"></textarea>

    <button type="submit" class="login">Lapor</button>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>