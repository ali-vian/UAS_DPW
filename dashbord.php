<?php
$nama = "admin";
$pswrd = "1234";
if(! isset($_POST['username']) ||
! isset($_POST["password"])){
  header("location:index.php");
} 
else if(!($_POST['username'] == $nama &&
 $_POST['password']==$pswrd)){
  header("location:index.php?erorr=1");
};

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Informasi | Dashbord</title>
  </head>
  <link rel="stylesheet" href="styleDs.css" />
  <body>
    <section>
      <div class="container">
        <div class="logo">
          <img src="user.png" alt="" />
          <div class="caption">
            <p><?= $_POST["username"]; ?></p>
            <p>220411100082</p>
          </div>
        </div>
        <nav>
          <div class="navbar">Dashbord</div>
          <div class="navbar">Riwayat Aktivitas</div>
          <div class="navbar">Info</div>
          <div class="navbar">Laporan Pemdes</div>
          <div class="navbar">Layanan Surat</div>
          <div class="navbar">Pembayaran</div>
        </nav>
      </div>
      <div class="container2">
        <div class="nav-atas"></div>
        <h1>Dashbord</h1>
        <div class="container3">
          <div class="kotak">
            Saldo
            <h3>Rp. 1.000.000</h3>
          </div>
          <div class="kotak">
            Jumlah Penduduk
            <h3>2.048.332 Jiwa</h3>
          </div>
          <div class="kotak">
            Tingkat Polusi
            <h3>50%</h3>
          </div>
          <div class="kotak">
            Laporan
            <h3>17 Laporan</h3>
          </div>
        </div>
        <div class="info">
          <div class="kotak1">
            <img src="grafik.png" alt="" />
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod
              veritatis consectetur laboriosam quidem sit, illo repellat.
              Eveniet, corrupti neque fugiat vel dolor amet? Harum porro cum
              temporibus incidunt mollitia necessitatibus.
            </p>
          </div>
          <div class="kotak1">
            <img src="grafik2.png" alt="" />
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione
              dolores, sequi porro dicta provident voluptatibus ea inventore!
              Molestias atque modi velit quam veniam doloribus consequuntur
              minus, maiores accusantium officia earum!
            </p>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
