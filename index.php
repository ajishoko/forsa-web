<!DOCTYPE html>
<html lang="en">
    <head>
        <title>F O R S A | Forum Mahasiswa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="libs/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="src/css/mycss.css">
        <script type="text/JavaScript" src="src/js/jquery-3.1.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--insert more css file here -->
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" id='navbarFORSA'>
            <div class='container-fluid'>
                <div class="navbar-header">
                    <a href="index.php"><img src='img/official.png' height='35px' id='logoF' style='margin-top: 8px;margin-left: 8px;'></a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.php">F O R S A . I D</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="daftar.php"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Masuk</a></li>
                </ul>
            </div>
        </nav>
        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><span><img src='img/official.png' height='35px'></span><b> Masuk ke Akun Anda</b></h5>
        </div>
        <div class="modal-body">
          <form method="post" action="./index.php">
                <h6>Username</h6>
                <input class="form-control" type="text" name="username" id="username" placeholder="Ketikkan Username Anda">
                <br>
                <h6>Password</h6>
                <input class="form-control" type="password" name="password" id="password" placeholder="Ketikkan Password Anda">
                <br>
                <button type='submit' class='btn btn-danger' name='login' value='login' id="loginButton"><span class='glyphicon glyphicon-log-in'></span>  Masuk</button>
          </form>
          
        </div>
        <div class="modal-footer">
            <?php
                if(isset($_POST["login"])){
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    if($username == "" && $password == ""){
                        print"  <script>
                                    alert('Harap isi Username atau Password anda untuk melanjutkan ke halaman FORSA');
                                </script>";
                    }
                }
            ?>
        </div>
      </div>
      
    </div>
  </div>
        <div id="loginDisplay">
            <div class='selamatdatang'>
                <div id='div1' class='container'class='row'>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class='col-sm-6'>
                        <h1 style='color:#fff' id='hai'><b>Selamat Datang di FORSA.ID</b></h1>
                        <br>
                        <br>
                        <h4 style='color:#fff;' id='adalah'>FORSA.ID adalah tempat bagi para mahasiswa untuk berbagi ide, wawasan, dan opini dengan/bersama mahasiswa lainnya.</h4>
                        <br>
                        <br>
                        <br>
                        <h5 style='color:#fff;' id='akun'>Belum punya akun di FORSA.ID ?</h5>
                        <br>
                        <a href="daftar.php"><button type='submit' class='btn btn-danger' name='daftar' value='daftar' id="button">
                            <h5>Buat Akun Sekarang</h5>
                        </button></a>
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
                    <div class='col-sm-6'>
                    </div>
                </div>
            </div>
            <div id='div2'>
                <img class="img-responsive" src="img/jumboforsa02.jpg">
            </div>
            <div id='div3'>
                <img class="img-responsive" src="img/img2.png">
            </div>
            
        </div>
        <div id='div4'>
            <?php
                include"footer.php";
            ?>
        </div>
    </body>
</html>
