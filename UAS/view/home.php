<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TANI IT</title>
    <link rel="stylesheet" href="CSS/home.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div class="Head">
        <img src="img/logo.png" alt="Ini Logo" class="Logo" width="300px" height="80px">
        <ul class="Menu">
            <li class="w3-xlarge"><a href="?page="><i class="fa fa-home"></i>HOME</a></li>
            <li class="w3-xlarge"><a href="?page=index_content">KABAR TERKINI</a></li>
            <li class="w3-xlarge"><a href="javascript:openclose('toggle');"><i class="fa fa-search"></i></a></li>
        </ul>
</div>

<div id="toggle" style="display:none">
    <div class="search-box">
        <form class="search-form ">
        <input type="text" placeholder="Ketikkan kata kunci disini....">
        <button type="submit">CARI</button>
        </form>
    </div>
</div>

<div class="Body">
    <div class="DaftarBox" style="<?= $display;?>" >
        <h3>Dapatkan Informasi Terbaru Dan Kabar Terkini Dari Kami!!</h3>
        <div class="Daftar">
        <form action="" autocomplete="off" method="POST">
            <label for="Email">Email</label>
            <input type="email" name="email" id="email" placeholder="@gmail.com" class="box" autocomplete="on" included>
            <label for="Password">Password</label>
            <input type="password" name="password" id="Password" class="box" included>
            <input type="submit" value="Login" name="login" class="button">
            <a href="?page=index_signup" class="else">Belum punya akun!</a>
          </form>
        </div>
    </div>
    <div class="DaftarBox" style="<?= $display2;?>" >
    <h3 style="text-decoration:none; text-align:center; overflow:hidden;"><?= $nama; ?></h3>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="Daftar">
            <label for="upload">Tambah Gambar</label>
            <br>
            <br>
            <input type="file" name="file">
            <br>
            <br>
		    <input type="submit" name="upload" value="Upload">
        </div>
	</form>
    </div>
    <div class="DaftarBox" style="padding-bottom:10px; <?= $display3;?>"  >
        <a href="?page=logout" class="logout">[ LOGOUT ]</a>
        <br>
        <div style="width:250px; height:250px;overflow:hidden;margin-left:100px;border-radius:100% ">
            <img src="<?php echo "file/".$pict['nama_file']; ?>?resize=480:*" alt="" class="cropped" width="100%" height="100%" >
        </div>
        <br>
        <h3 style="text-decoration:none; text-align:center; overflow:hidden;"><?= $nama; ?></h3>
    </div>
    <div class="Judul">
        <a href="?page="></a>
        <img src="img/panen.jpg" alt="" class="imgContent">
        <h1>Seputar Teknologi Pertanian</h1>
        <a href="?page=controller/logout.php"></a>
        </a>        
    </div>
    <div class = kontener>
    <table border="0">
        <tr>
            <th><a href="?page=index_content"><img src="img/tani.jpg" alt="" class="po"></a></th>
            <th><a href="?page=index_content2"><img src="img/kebun.jpg" alt="" class="po"></a></th>
            <th><a href="?page=index_content3"><img src="img/Jagung.jpg" alt="" class="po"></a></th>
            <th><a href="?page=index_content4"><img src="img/Gandum.jpg" alt="" class="po"></a></th>
            <th><a href="?page=index_content5"><img src="img/Teknologi.jpg" alt="" class="po"></a></th>
        </tr>
        <tr>
            <td><a href="?page=index_content">Petani Merugi Saat Sektor Pertanian Tumbuh di Tengah Pandemi.....</a></td>
            <td><a href="?page=index_content2">Perkebunan Teh Di Jambi Bulan Ini Keuntunganya Melesat.........</a></td>
            <td><a href="?page=index_content3">Cara menanam jagung dengan metode tanpa olah tanah.........</a></td>
            <td><a href="?page=index_content4">Inilah Mengapa Gandum Paku Sereal Sangat di minati.........</a></td>
            <td><a href="?page=index_content5">Teknologi Pertanian Tahun Ini Berkembang Sangat Pesat.........</a></td>
        </tr>
    </table>
    </div>
</div>
<script src="JS/script.js"></script>
</body>
</html>
