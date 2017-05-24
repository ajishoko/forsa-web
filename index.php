<?php 
    include("dbconnect.php");
    $sql = "SELECT * FROM FORSA.AKUN";
/*    $result = pg_query($connection , $sql);
                            while($row = pg_fetch_array($result)){
                                echo "  <tr>
                                            <td>".$row[0]."</td>
                                            <td>".$row[1]."</td>
                                            <td>".$row[2]."</td>
                                        </tr>";
                            }*/
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>F O R S A | Forum Mahasiswa</title>
		<link rel="stylesheet" href="libs/bootstrap/dist/css/bootstrap.min.css">
		
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="beranda.html"  id="websiteName">
                    	<img src='img/forsared.png' height='35px' id='logoF' style='margin-top:-8px;'>
                    </a>
                </div>
            	<ul class="nav navbar-nav">
			      	<li class="active"><a href="beranda.html">Utama</a></li>
					<li><a href="forum-portal.html">Forum</a></li>
			    </ul>
                 <script type="text/javascript">
                    function pindah()
                    {
                        var username = document.getElementById("username").value;
                        var password = document.getElementById("password").value;
                        if(username=="username00" && password=="password"){
                            alert("Login Sukses, klik button OK untuk dialihkan ke halaman Anda.");
                            window.location.href="beranda.html";
                        }
                        else{
                            alert("Login Gagal, silahkan periksa username atau password anda.");
                        }
                    }
                </script>
                <form class="navbar-form navbar-right">
                    <form class="navbar-form navbar-right" method="post" action="./index.php">
                        <div class="form-group">
                            <input class="form-control input-sm" type="text" name="username" id="username" placeholder="username">
                        </div>
                        <div class="form-group">
                            <input class="form-control input-sm" type="password" name="password" id="password" placeholder="password">
                        </div>
                        <div class="form-group">
                            <input type="button" class='btn btn-danger' value="Masuk" id="tombol-login" onclick="pindah()">
                        </div>
                    </form>
                </form>
            </div>
        </nav>
        <img src='img/jumboforsa01.png' class="img-responsive">
        <img src='img/img2.png' class="img-responsive">
        <div class="footer" id="footerWeb" style='text-align: center;'>
            <hr>
            <h4><b>&copy; 2017 - Continental Team</b></h4>
            <br>
            <h6>Alham Febian Rinaldy / 1506757636</h6>
            <h6>Andre Gema Syahputra / 1506689282</h6>
            <h6>Irfin Handiliastawan / 1506689704</h6>
            <h6>Yosua Bisma Putrapratama / 1506689622</h6>
            <h6>Yudistira Ramadhan / 1506689635</h6>
           	<br>
        </div>
	</body>
</html>