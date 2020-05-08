<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php 
  session_start();
 
  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""){
    header("location:index.php?pesan=gagal");
  }
 
  ?>
    <div id="batas">
        <div id="atas">
            <img src="image/banner.jpg" width="700px" height="250px">
            <a href="logout.php">LOGOUT</a> 
            <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>

        </div>
        <div id="sidebar">
            <img src="image/logo.png" alt="">
            <div class="populer">
                <p>Sidebar</p>
            </div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="history.html">History</a></li>
                    <li><a href="publikasi.html">Publikasi</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            
        </div>
        <div id="menu">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="history.html">History</a></li>
                <li><a href="publikasi.html">Publikasi</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        <div id="isi">
            <h1>Universitas Udayana</h1>
            <p>Universitas Udayana memiliki berbagai Program Studi yang dapat dipilih oleh calon mahasiswa sesuai dengan minat dan potensi akademisnya. Temukan informasi lebih lanjut di sini:</p>
            <h1>Publikasi</h1>
            <div class = "publikasi">
                <img src="image/p1.jpg" alt="">
                <p><a href="publikasi.html">Baca Lebih Lanjut >></a></p>
            </div>
            <div class = "publikasi">
                <img src="image/p2.png" alt="">
                <p><a href="publikasi.html">Baca Lebih Lanjut >></a></p>
            </div>
            
            <div class = "publikasi">
                <img src="image/p3.png" alt="">
                <p><a href="publikasi.html">Baca Lebih Lanjut >></a></p>
            </div>
        </div>
        <div id="clear"></div>
        <div id="footer">
            <p>©2020 Aryadi Suputra</p>
        </div>
        
    </div>
</body>
</html>