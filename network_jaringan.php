<?php
require_once "./utils.php";
$conn = connect("zapplere_unitjkt");
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Pusat Reparasi Apple iMac Macbook dan Window Surface di Jakarta, Apple repair service Jakarta, iMac repair service Jakarta Macbook repair service Jakarta, Window Surface repair service Jakarta, onsite home repair replacement service for iMac Macbook iPhone di Jakarta, Jasa service baterai MacBook Pro Macbook Pro Retina M1 semua model tedekat di Jakarta Original bergaransi harga terbaru dan termurah 2022, Jasa service baterai MacBook Air Macbook Air Retina M1 semua model tedekat di Jakarta Original bergaransi harga terbaru dan termurah 2022, Jasa service baterai MacBook Macbook Retina semua model tedekat di Jakarta Original bergaransi harga terbaru dan termurah 2022, Jasa service baterai iPhone semua model tedekat di Jakarta Original bergaransi harga terbaru dan termurah 2022, Jasa service baterai iPad semua model tedekat di Jakarta Original bergaransi harga terbaru dan termurah 2022, Jasa service baterai iPod semua model tedekat di Jakarta Original bergaransi harga terbaru dan termurah 2022" />
  <meta name="keywords" content="Pusat Reparasi Apple iMac Macbook dan Window Surface di Jakarta, Apple repair service Jakarta, iMac repair service Jakarta Macbook repair service Jakarta, Window Surface repair service Jakarta, onsite home repair replacement service for iMac Macbook iPhone di Jakarta, Jasa service baterai MacBook Pro Macbook Pro Retina M1 semua model tedekat di Jakarta Original bergaransi harga terbaru dan termurah 2022, Jasa service baterai MacBook Air Macbook Air Retina M1 semua model tedekat di Jakarta Original bergaransi harga terbaru dan termurah 2022, Jasa service baterai MacBook Macbook Retina semua model tedekat di Jakarta Original bergaransi harga terbaru dan termurah 2022, Jasa service baterai iPhone semua model tedekat di Jakarta Original bergaransi harga terbaru dan termurah 2022, Jasa service baterai iPad semua model tedekat di Jakarta Original bergaransi harga terbaru dan termurah 2022, Jasa service baterai iPod semua model tedekat di Jakarta Original bergaransi harga terbaru dan termurah 2022" />
  <meta name="p:domain_verify" content="df231eb13e74c69f21803e5ac85f1617" />
  <meta name="msvalidate.01" content="B8AC1AC7B7B9CA9F013084A49BBC5D8A" />

  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-46751103-1', 'zapplerepair.com');
    ga('send', 'pageview');
  </script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- My CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <link rel="stylesheet" href="css/colorbox.css">
  <script src="js/jquery-3.5.1.slim.min.js"></script>



  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto&display=swap" rel="stylesheet">

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="shortcut icon" href="img/logo.ico">

  <title>Pusat Servis Apple iMac Macbook dan Window Surface di Jakarta</title>

  <meta name="facebook-domain-verification" content="f5x14c2v4q086kinl55v08njt343kk" />
  <!-- Facebook Pixel Code -->
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '287555243148056');
    fbq('track', 'PageView');
  </script>
</head>

<body>
  <!-- HEADER -->
  <?php
  include 'header.php';
  ?>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav navigasi mx-auto">
      <li class="nav-item active">
        <a class="nav-link" href="https://indonesia.zapplerepair.com/">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Service Apple</a>
        <div class="dropdown-menu dropdown-menu-center mt-2" aria-labelledby="navbarDropdown">
          <div class="d-md-flex align-items-start justify-content-center">
            <div class="first-column">
              <a class="dropdown-item" href="ipadrepairIndonesia">iPad</a>
              <a class="dropdown-item" href="iphonerepairIndonesia">iPhone</a>
              <a class="dropdown-item" href="ipodrepairIndonesia">iPod</a>
              <a class="dropdown-item" href="iwatchrepairIndonesia">iWatch</a>
              <a class="dropdown-item" href="macbookrepairIndonesia">Macbook</a>
            </div>
            <div class="first-column">
              <a class="dropdown-item" href="macbookairrepairIndonesia">Macbook Air</a>
              <a class="dropdown-item" href="macbookprorepairIndonesia">Macbook Pro</a>
              <a class="dropdown-item" href="macminirepairIndonesia">Mac Mini</a>
              <a class="dropdown-item" href="imacrepairIndonesia">iMac</a>
              <a class="dropdown-item" href="macprorepairIndonesia">Mac Pro</a>
            </div>
            <div class="first-column">
              <a class="dropdown-item" href="cinemarepairIndonesia">Cinema Display</a>
              <a class="dropdown-item" href="appletvrepairIndonesia">Apple Home</a>
              <a class="dropdown-item" href="beatsrepairIndonesia">Beats</a>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="surfacerepairIndonesia">Service Surface</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Service Lainnya</a>
        <div class="dropdown-menu dropdown-menu-center mt-2" aria-labelledby="navbarDropdown">
          <div class="d-md-flex align-items-start justify-content-center">
            <div class="first-column">
              <a class="dropdown-item" href="samsungrepairIndonesia">Samsung</a>
              <a class="dropdown-item" href="xiaomirepairIndonesia">Xiaomi</a>
              <a class="dropdown-item" href="opporepairIndonesia">Oppo</a>
              <a class="dropdown-item" href="oneplusrepairIndonesia">One Plus</a>
              <a class="dropdown-item" href="blackberryrepairIndonesia">Blackberry</a>
            </div>
            <div class="first-column">
              <a class="dropdown-item" href="googlerepairIndonesia">Google Pixel</a>
              <a class="dropdown-item" href="rogrepairIndonesia">Asus ROG</a>
              <a class="dropdown-item" href="alienwarerepairIndonesia">Dell Alianware</a>
              <a class="dropdown-item" href="predatorrepairIndonesia">Acer Predator</a>
              <a class="dropdown-item" href="razerbladerepairIndonesia">Razer Blade</a>
            </div>
            <div class="first-column">
              <a class="dropdown-item" href="nintendorepairIndonesia">Nintendo</a>
              <a class="dropdown-item" href="playstationrepairIndonesia">Playstation</a>
              <a class="dropdown-item" href="xboxrepairIndonesia">XBOX</a>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://indonesia.zapplerepair.com/onsite/">Service di Tempat</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Jual Beli</a>
        <div class="dropdown-menu dropdown-menu-center mt-2" aria-labelledby="navbarDropdown">
          <div class="d-md-flex align-items-start justify-content-center">
            <div class="first-column">
              <a class="dropdown-item" href="unit">Beli Unit</a>
              <a class="dropdown-item" href="aksesoris">Beli Aksesoris</a>
              <a class="dropdown-item" href="sparepart">Beli Sparepart</a>
              <a class="dropdown-item" href="https://www.zapplerepair.com/tradein-jualbeli-pricelist-iphone-ipad-macbook-notebook.html">Jual Unit</a>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Blog</a>
        <div class="dropdown-menu dropdown-menu-center mt-2" aria-labelledby="navbarDropdown">
          <div class="d-md-flex align-items-start justify-content-center">
            <div class="first-column">
              <a class="dropdown-item" href="ipadbloglist">iPad</a>
              <a class="dropdown-item" href="iphonebloglist">iPhone</a>
              <a class="dropdown-item" href="ipodbloglist">iPod</a>
              <a class="dropdown-item" href="iwatchbloglist">iWatch</a>
              <a class="dropdown-item" href="macbookbloglist">Macbook</a>
              <a class="dropdown-item" href="macbookairbloglist">Macbook Air</a>
            </div>
            <div class="first-column">
              <a class="dropdown-item" href="macbookprobloglist">Macbook Pro</a>
              <a class="dropdown-item" href="macminibloglist">Mac Mini</a>
              <a class="dropdown-item" href="imacbloglist">iMac</a>
              <a class="dropdown-item" href="macprobloglist">Mac Pro</a>
              <a class="dropdown-item" href="surfacebloglist">Surface</a>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://zapplerepair.com/jasa-sewa-rental-Macbook-iMac-untuk-business-expat-di-Jakarta.html">Rental Macbook</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/indonesia.zapplerepair/network_jaringan">Network Jaringan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="office-onsite-desktop-support-maintainance-untuk-perusahaan-PC-Mac-Smartphone-Tablet.html">Office Support</a>
      </li>
    </ul>
  </div>
  </div>
  </nav>
  </header>
  <!-- SLIDER -->
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner header" style="height:100%">
      <div class="carousel-item active">
        <a href="macbookprorepairIndonesia">
          <img src="img/index/applerepair.jpg" class="d-block w-100 img-fluid" alt="Servis Apple">
        </a>
      </div>
      <div class="carousel-item">
        <a href="surfacerepairIndonesia">
          <img src="img/index/surfacerepair.jpg" class="d-block w-100 img-fluid" alt="Servis Windows Surface">
        </a>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- ABOUT SECTION -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title">
            <h3 class="title">TENTANG ZAPPLEREPAIR</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="about-main">
            <p>Di Zapplerepair, kami mengkhususkan diri dalam memperbaiki perangkat Apple dan Windows, seperti kerusakan logicboard macbook, penggantian battery macbook/surface, layar lcd surface bergetar dan lainnya.
              Kami menyediakan beragam sparepart yang lengkap dan didukung oleh tenaga ahli yang profesional. Di samping itu kami memiliki pengalaman bertahun-tahun dalam perbaikan IT,
              yang menjadikan kami sebagai tempat service Apple dan Windows Surface terbaik di Jakarta dengan harga yang optimal dan pelayanan serta fasilitas yang berkualitas.
              <!-- Silahkan kunjungi cabang Zapplerepair terdekat di kota Anda dan <b>aktifkan fitur lokasi anda untuk mendapatkan penawaran spesial</b>.</p> -->
          </div>
        </div>
        <div class="col-md-4 about-secondary">
          <ul class="list-group list-group-flush text-center">
            <li class="list-group-item"><a href="macbookprorepairIndonesia">
                <h6>Service Apple Mac</h6>
              </a></li>
            <li class="list-group-item"><a href="surfacerepairIndonesia">
                <h6>Service Windows Surface</h6>
              </a></li>
            <li class="list-group-item"><a href="antar-jemput-macbook-ipad-iphone-ipod-repair-home-service.html">
                <h6>Jasa Service Macbook di Tempat</h6>
              </a></li>
            <li class="list-group-item"><a href="antar-jemput-macbook-ipad-iphone-ipod-repair-home-service.html">
                <h6>Jasa Service Surface di Tempat</h6>
              </a></li>
            <li class="list-group-item"><a href="sparepart">
                <h6>Sparepart Apple Mac dan Surface</h6>
              </a></li>
            <li class="list-group-item"><a href="https://zapplerepair.com/jasa-sewa-rental-Macbook-iMac-untuk-business-expat-di-Jakarta.html">
                <h6>Jasa Sewa/Rental Macbook/iMac</h6>
              </a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!--PROMO SECTION -->
  <section id="promo">
    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <div class="section-title">
            <h3 class="title">UNIT</h3>
          </div>
        </div>
        <div class="col-md-2 promo-button">
          <a href="unit">
            <p>Lihat Semua</p>
          </a>
        </div>
      </div>
      <!--Box Product -->
      <div class="row product">
        <div class="col-sm-12">
          <div class="row">
            <?php
                        $stmt = $conn->query(
                            "SELECT * FROM unit WHERE promo='Ya' LIMIT 4"
                          )->fetchAll(PDO::FETCH_ASSOC);
              
                          foreach ($stmt as $row) : ?>
                            <a href="detail-unit?id=<?= $row['id'] ?>&slug=<?= $row['slug'] ?>">
                              <div class="col-sm-3 mb-3">
                                <div class="card card-product text-center">
                                  <img src="zapple-sparepart/img/unit/<?= $row['gambar'] ?>" class="card-img-top" alt="<?= $row['nama'] ?>" style="border: 1px solid black;object-fit:contain;" width="auto" height="auto">
                                  <div class="card-body">
                                    <h6><?= $row['nama'] ?></h6>
                                    <br />
                                    <br />
                                    <hr>
                                    <h7><?= $row['harga']; ?></h7>
                                  </div>
                                  <div class="card-footer">
                                    <a href="https://wa.link/g0d3kr" target="_blank"><button type="button" class="btn btn-danger"><i class="fa fa-shopping-cart"></i> Beli</button></a>
                                  </div>
                                </div>
                              </div>
                            </a>
                          <?php endforeach; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                  <!--PROMO SECTION -->
  <section id="promo">
    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <div class="section-title">
            <h3 class="title">SPAREPARTS</h3>
          </div>
        </div>
        <div class="col-md-2 promo-button">
          <a href="unit">
            <p>Lihat Semua</p>
          </a>
        </div>
      </div>
      <!--Box Product -->
      <div class="row product">
        <div class="col-sm-12">
          <div class="row">
            <?php
                        $stmt = $conn->query(
                            "SELECT * FROM unit WHERE promo='Ya' LIMIT 4"
                          )->fetchAll(PDO::FETCH_ASSOC);
              
                          foreach ($stmt as $row) : ?>
                            <a href="detail-unit?id=<?= $row['id'] ?>&slug=<?= $row['slug'] ?>">
                              <div class="col-sm-3 mb-3">
                                <div class="card card-product text-center">
                                  <img src="zapple-sparepart/img/unit/<?= $row['gambar'] ?>" class="card-img-top" alt="<?= $row['nama'] ?>" style="border: 1px solid black;object-fit:contain;" width="auto" height="auto">
                                  <div class="card-body">
                                    <h6><?= $row['nama'] ?></h6>
                                    <br />
                                    <br />
                                    <hr>
                                    <h7><?= $row['harga']; ?></h7>
                                  </div>
                                  <div class="card-footer">
                                    <a href="https://wa.link/g0d3kr" target="_blank"><button type="button" class="btn btn-danger"><i class="fa fa-shopping-cart"></i> Beli</button></a>
                                  </div>
                                </div>
                              </div>
                            </a>
                          <?php endforeach; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                  <!--PROMO SECTION -->
  <section id="promo">
    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <div class="section-title">
            <h3 class="title">ACCESSORIES</h3>
          </div>
        </div>
        <div class="col-md-2 promo-button">
          <a href="unit">
            <p>Lihat Semua</p>
          </a>
        </div>
      </div>
      <!--Box Product -->
      <div class="row product">
        <div class="col-sm-12">
          <div class="row">
            <?php
                        $stmt = $conn->query(
                            "SELECT * FROM unit WHERE promo='Ya' LIMIT 4"
                          )->fetchAll(PDO::FETCH_ASSOC);
              
                          foreach ($stmt as $row) : ?>
                            <a href="detail-unit?id=<?= $row['id'] ?>&slug=<?= $row['slug'] ?>">
                              <div class="col-sm-3 mb-3">
                                <div class="card card-product text-center">
                                  <img src="zapple-sparepart/img/unit/<?= $row['gambar'] ?>" class="card-img-top" alt="<?= $row['nama'] ?>" style="border: 1px solid black;object-fit:contain;" width="auto" height="auto">
                                  <div class="card-body">
                                    <h6><?= $row['nama'] ?></h6>
                                    <br />
                                    <br />
                                    <hr>
                                    <h7><?= $row['harga']; ?></h7>
                                  </div>
                                  <div class="card-footer">
                                    <a href="https://wa.link/g0d3kr" target="_blank"><button type="button" class="btn btn-danger"><i class="fa fa-shopping-cart"></i> Beli</button></a>
                                  </div>
                                </div>
                              </div>
                            </a>
                          <?php endforeach; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <div class="list-title mt-4">
                <div class="row">
                    <div class="col-sm-8">
                        <h6>Blog</h6>                
                    </div>
                    <div class="col-sm-2 more">
                        <a href="surfacebloglist">Artikel Lainnya <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div> 
            </div>  
            <div class="row">
                                    <div class="col-sm-2 content-blog">
                        <a href="detail-list-ipad.php?id=707&amp;slug=berhasil-2023-mengatasi-masalah-touchpad-kotor-dan-terkena-minyak-pentingnya-pembersihan-dan-alat-yang-dapat-digunakan">
                           <img src="https://indonesia.zapplerepair.com/zapple-blog/images/01082023165432Untitled design (7).png" class="card-img-top mt-3 mb-2" alt="(Berhasil 2023) Mengatasi Masalah Touchpad Kotor dan Terkena Minyak, Pentingnya Pembersihan dan Alat yang Dapat Digunakan">
                            <div class="text-blog">
                                <h7>(Berhasil 2023) Mengatasi Masalah Touchpad Kotor dan Terkena Minyak, Pentingnya Pembersihan dan Alat yang Dapat Digunakan</h7><br>
                                <p class="mt-2">
                                Touchpad adalah salah satu fitur utama pada laptop yang memungkinkan pengguna untuk mengontrol kursor dan melakukan gestur dengan jari. Namun, touchpad yang kotor atau terkena minyak dapat menyebabkan berbagai masalah...</p>
                            </div>    
                        </a>
                    </div>
                                    <div class="col-sm-2 content-blog">
                        <a href="detail-list-ipad.php?id=696&amp;slug=kekurangan-menggunakan-lcd-surface-pro-6-atau-pro-5-ke-dalam-surface-pro-7">
                           <img src="https://indonesia.zapplerepair.com/zapple-blog/images/23062023113958Daco_5902108.png" class="card-img-top mt-3 mb-2" alt="Kekurangan Menggunakan LCD Surface Pro 6 atau Pro 5 ke dalam Surface Pro 7">
                            <div class="text-blog">
                                <h7>Kekurangan Menggunakan LCD Surface Pro 6 atau Pro 5 ke dalam Surface Pro 7</h7><br>
                                <p class="mt-2">
                                Meskipun peningkatan grafis Surface Pro 5 membuatnya tampak seperti penurunan dari Surface Pro 6, Surface Pro 7 sebenarnya merupakan peningkatan karena peningkatan kinerja CPU. Surface Pro 7 memiliki banyak fitur...</p>
                            </div>    
                        </a>
                    </div>
                                    <div class="col-sm-2 content-blog">
                        <a href="detail-list-ipad.php?id=691&amp;slug=cara-menginstal-prime-os-atau-sistem-operasi-android-lainnya-di-windows-10-11">
                           <img src="https://indonesia.zapplerepair.com/zapple-blog/images/17062023122146Untitled design (2).png" class="card-img-top mt-3 mb-2" alt="Cara Menginstal Prime OS atau Sistem Operasi Android Lainnya di Windows 10/11">
                            <div class="text-blog">
                                <h7>Cara Menginstal Prime OS atau Sistem Operasi Android Lainnya di Windows 10/11</h7><br>
                                <p class="mt-2">
                                Dalam artikel ini, kami akan memberikan instruksi menyeluruh tentang cara menginstal Prime OS, sistem operasi yang berbasis pada Android, di komputer dengan Windows 10 atau 11. Mengikuti panduan ini akan...</p>
                            </div>    
                        </a>
                    </div>
                                    <div class="col-sm-2 content-blog">
                        <a href="detail-list-ipad.php?id=689&amp;slug=5-langkah-cara-mengatasi-your-battery-has-experienced-permanent-failure-pada-laptop">
                           <img src="https://indonesia.zapplerepair.com/zapple-blog/images/15062023145626Your-battery-has-experienced-permanent-failure.png" class="card-img-top mt-3 mb-2" alt="5 Langkah Cara Mengatasi " your="" battery="" has="" experienced="" permanent="" failure"="" pada="" laptop"="">
                            <div class="text-blog">
                                <h7>5 Langkah Cara Mengatasi "Your Battery Has Experienced Permanent Failure" pada Laptop</h7><br>
                                <p class="mt-2">
                                Apa yang menyebabkan munculnya error "Your Battery Has Experienced Permanent Failure".&nbsp;Bagaimana cara memperbaiki "Your Battery Has Experienced Permanent Failure"?. Anda akan menemukan cara untuk mengatasi kesalahan tersebut dalam artikel ini.


Apa...</p>
                            </div>    
                        </a>
                    </div>
                                    <div class="col-sm-2 content-blog">
                        <a href="detail-list-ipad.php?id=687&amp;slug=apa-itu-dead-pixel-penyebab-serta-cara-memperbaikinya">
                           <img src="https://indonesia.zapplerepair.com/zapple-blog/images/13062023173025Dead Pixel.png" class="card-img-top mt-3 mb-2" alt="Apa itu Dead Pixel, Penyebab, serta Cara Memperbaikinya">
                            <div class="text-blog">
                                <h7>Apa itu Dead Pixel, Penyebab, serta Cara Memperbaikinya</h7><br>
                                <p class="mt-2">
                                Dalam dunia teknologi, kita sering menghadapi masalah dengan perangkat elektronik kita. Dead pixel adalah masalah umum dengan layar laptop. Dead pixel adalah titik kecil yang tidak berfungsi yang muncul di...</p>
                            </div>    
                        </a>
                    </div>
                                    <div class="col-sm-2 content-blog">
                        <a href="detail-list-ipad.php?id=686&amp;slug=cara-mengatasi-masalah-wifi-tidak-terdeteksi-di-windows">
                           <img src="https://indonesia.zapplerepair.com/zapple-blog/images/13062023133626WiFi-tidak-terdeteksi-di-Windows-10.jpg" class="card-img-top mt-3 mb-2" alt="Cara Mengatasi Masalah WiFi Tidak Terdeteksi di Windows">
                            <div class="text-blog">
                                <h7>Cara Mengatasi Masalah WiFi Tidak Terdeteksi di Windows</h7><br>
                                <p class="mt-2">
                                Jika WiFi pada laptop tidak berfungsi, itu dapat menjadi masalah yang menjengkelkan bagi pengguna. Salah satu penyebab umumnya adalah masalah dengan driver WiFi. Artikel ini akan membahas beberapa langkah yang...</p>
                            </div>    
                        </a>
                    </div>
                                    <div class="col-sm-2 content-blog">
                        <a href="detail-list-ipad.php?id=680&amp;slug=mengapa-overheating-cpu-microsoft-surface-merusak-kamera-dan-melambatkan-kinerja-simak-berikut">
                           <img src="https://indonesia.zapplerepair.com/zapple-blog/images/09062023150036Untitled design (1).png" class="card-img-top mt-3 mb-2" alt="Mengapa Overheating CPU Microsoft Surface Merusak Kamera dan Melambatkan Kinerja? Simak berikut!">
                            <div class="text-blog">
                                <h7>Mengapa Overheating CPU Microsoft Surface Merusak Kamera dan Melambatkan Kinerja? Simak berikut!</h7><br>
                                <p class="mt-2">
                                Salah satu masalah umum yang sering dihadapi oleh pengguna perangkat elektronik, termasuk Microsoft Surface, adalah CPU yang terlalu panas. Ini dapat berdampak negatif pada berbagai bagian perangkat, termasuk kamera, dan...</p>
                            </div>    
                        </a>
                    </div>
                                    <div class="col-sm-2 content-blog">
                        <a href="detail-list-ipad.php?id=676&amp;slug=memperbaiki-masalah-keyboard-windows-yang-tidak-bisa-mengetik-angka">
                           <img src="https://indonesia.zapplerepair.com/zapple-blog/images/30052023101304keyboard sticky keys.jpeg" class="card-img-top mt-3 mb-2" alt="Memperbaiki Masalah Keyboard Windows yang Tidak Bisa Mengetik Angka">
                            <div class="text-blog">
                                <h7>Memperbaiki Masalah Keyboard Windows yang Tidak Bisa Mengetik Angka</h7><br>
                                <p class="mt-2">
                                Jika Anda baru menggunakan komputer dengan sistem operasi Windows, Anda mungkin pernah mengalami masalah dengan keyboard Anda yang tidak memungkinkan Anda mengetik angka. Masalah seperti ini dapat sangat mengganggu, terutama...</p>
                            </div>    
                        </a>
                    </div>
                                    <div class="col-sm-2 content-blog">
                        <a href="detail-list-ipad.php?id=671&amp;slug=cara-mendapatkan-kunci-pemulihan-bitlocker-untuk-perangkat-windows">
                           <img src="https://indonesia.zapplerepair.com/zapple-blog/images/23052023195417bitlocker.jpeg" class="card-img-top mt-3 mb-2" alt="Cara Mendapatkan Kunci Pemulihan BitLocker untuk Perangkat Windows">
                            <div class="text-blog">
                                <h7>Cara Mendapatkan Kunci Pemulihan BitLocker untuk Perangkat Windows</h7><br>
                                <p class="mt-2">
                                Bagaimana cara mengatasi BitLock Recovery yang ditampilkan pada perangkat Windows yang ditampilkan seperti pada Gambar di atas dan mendapatkan Kunci Pemulihan BitLocker? Ikuti langkah-langkah di bawah ini!


1. Masuk ke alamat...</p>
                            </div>    
                        </a>
                    </div>
                    
            </div>
            </div>
                 <!-- STORE SECTION -->
  <section id="store">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title">
            <h3 class="title">OUTLET KAMI</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 mb-3">
          <div class="card card-store text-center">
            <div class="card-body ">
              <h5>Kantor Pusat Jakarta</h5>
              <ul class="list-group list-group-flush p-0">
                <li class="list-group-item"><i class="fa fa-map-marker"></i>Jl. Jembatan 3 Raya<br><i class="fa fa-map-marker" style="color:#FFF"></i>Ruko 11J, Jakarta Utara
                  <br><i class="fa fa-map-marker" style="color:#FFF"></i><a href="https://s.id/qQdCY">View google maps</a>
                </li>
                <li class="list-group-item"><i class="fa fa-clock-o"></i>Senin s/d Jumat : 08.00 - 18.00<br />
                  <i class="fa fa-clock-o"></i>Sabtu & Minggu : 09.00 - 17.00
                </li>
                <li class="list-group-item"><a href="mailto:zapplerepair@gmail.com"><i class="fa fa-envelope"></i>zapplerepair@gmail.com</a></li>
                <li class="list-group-item"><a href="tel:02126081043"><i class="fa fa-phone"></i>021-26081043 (Office)</a><br><a href="tel:087788855868"><i class="fa fa-phone"></i>0877-8885-5868</a></li>
                <li class="list-group-item mt-2"><br><a href="https://wa.link/g0d3kr" target="_blank"><img src="img/logo-wa-png-fix-300x100.png"></a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card card-store text-center">
            <div class="card-body ">
              <h5>Cabang Jakarta Selatan</h5>
              <ul class="list-group list-group-flush p-0">
                <li class="list-group-item"><i class="fa fa-map-marker"></i>Jl. Mampang Prapat Raya<br><i class="fa fa-map-marker" style="color:#FFF"></i>No. 24C, Jakarta Selatan
                  <br><i class="fa fa-map-marker" style="color:#FFF"></i>
                  <a href="https://goo.gl/maps/LJtuYgLR3uvoovuQ6">View google maps</a>
                </li>
                <li class="list-group-item"><i class="fa fa-clock-o"></i>Senin - Minggu : 08.00 - 20.00
                </li>
                <li class="list-group-item"><a href="mailto:zapplerepair@gmail.com"><i class="fa fa-envelope"></i>zapplerepair@gmail.com</a></li>
                <li class="list-group-item"><a href="tel:02126081043"><i class="fa fa-phone"></i>021-26081043 (Office)</a><br><a href="tel:087788855868"><i class="fa fa-phone"></i>0877-8885-5868</a></li>
                <li class="list-group-item mt-2"><br><br><a href="https://wa.link/g0d3kr" target="_blank"><img src="img/logo-wa-png-fix-300x100.png"></a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card card-store text-center">
            <div class="card-body">
              <h5 class="card-title">Cabang Semarang</h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa fa-map-marker"></i>Jl. Industri 2 LIK No. 80-81,<br><i class="fa fa-map-marker" style="color:#FFF"></i>Genuk, Kota Semarang
                  <br><i class="fa fa-map-marker" style="color:#FFF"></i><a href="https://s.id/qQeFe">View google maps</a>
                </li>
                <li class="list-group-item"><i class="fa fa-clock-o"></i>Senin - Sabtu : 08.00 - 16.00
                  <br><i class="fa fa-map-marker" style="color:#FFF"></i> Minggu : Tutup
                </li>
                <li class="list-group-item"><a href="mailto:zapplerepair@gmail.com"><i class="fa fa-envelope"></i>zapplerepair@gmail.com</a></li>
                <li class="list-group-item"><a href="tel:087701868855"><i class="fa fa-phone"></i>0877-0186-8855 (Office)</a></li>
                <li class="list-group-item mt-2"><br><br><a href="https://wa.link/uffphh" target="_blank"><img src="img/logo-wa-png-fix-300x100.png"></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card card-store text-center">
            <div class="card-body">
              <h5 class="card-title">Cabang Surabaya</h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa fa-map-marker"></i>Ruko Surya Inti Permata <br> <i class="fa fa-map-marker" style="color:#FFF"></i>Blok C 58, Jl. Jemur Andayani No.50, Surabaya
                  <br><i class="fa fa-map-marker" style="color:#FFF"></i><a href="https://s.id/qQgVw">View google maps</a>
                </li>
                <li class="list-group-item"><i class="fa fa-clock-o"></i>Senin - Sabtu : 08.00 - 17.00
                  <br><i class="fa fa-map-marker" style="color:#FFF"></i> Minggu : Tutup
                </li>
                <li class="list-group-item"><a href="mailto:zapplerepair@gmail.com"><i class="fa fa-envelope"></i>zapplerepair@gmail.com</a></li>
                <li class="list-group-item"><a href="tel:03199013525"><i class="fa fa-phone"></i>031-99013525 (Office)</a><br><a href="tel:08176770687"><i class="fa fa-phone"></i>0817-6770-687</a></li>
                <li class="list-group-item mt-2"><a href="https://wa.link/hyk12e" target="_blank"><img src="img/logo-wa-png-fix-300x100.png"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div id="myModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">PROMO MERDEKA 17.8 - 17.9</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p><img style="width:100%" src="img/promomerdekatumbs.png"></p>
        </div>
        <div class="modal-footer">
          <a href="https://api.whatsapp.com/send?phone=6287788855868&text=Hai+Zapplerepair+saya+mau+tanya+detail+promo+pickup+atau+onsite">
            <button type="button" class="btn btn-success"><i class="fa fa-whatsapp"></i> Contact Us!</button></a>
          <a href="https://indonesia.zapplerepair.com/detail-list-surface.php?id=191&slug=promosi-spesial-hari-kemerdekaan-indonesia-ke-76-zapplerepair-free-pickup-imac-iphone-macbook-microsoft-surface-pro-area-jakarta-utara-jakarta-selatan-dan-semarang">
            <button type="button" class="btn btn-secondary"><i class="fa fa-globe"></i> Visit Us!</button></a>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <?php
  include "footer.php";
  ?>
  <script src="js/jquery-3.5.1.slim.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/backtotop.js"></script>
  <script src="js/addclass.js"></script>

  <!-- Carousel Header & Slider -->
  <script>
    $('.carousel').carousel({
      interval: 5000
    });
  </script>

  <script>
    //   $(document).ready(function(){
    //       $("#myModal").modal('show');
    //   });
  </script>

  <!-- <script>
            window.onload=function(){
              if(navigator.geolocation){
                navigator.geolocation.getCurrentPosition(showPosition,showError);
              }else{
                alert("Geolocation is not supported by this browser.");
              }
            }

            function showError(error)
            {
            switch(error.code)
              {
              case error.PERMISSION_DENIED:
                alert("User denied the request for Geolocation.")
                break;
              case error.POSITION_UNAVAILABLE:
                alert("Location information is unavailable.")
                break;
              case error.TIMEOUT:
                alert("The request to get user location timed out.")
                break;
              case error.UNKNOWN_ERROR:
                alert("An unknown error occurred.")
                break;
              }
            }

            function showPosition(pos)
            {
              var latitude = pos.coords.latitude;
              var longitude = pos.coords.longitude;
                    // alert("Latitude :" + latitude + "\n Longitude : " + longitude)

            if (longitude > 108.5569324 && longitude < 111.604991 && latitude < -6.405586 && latitude > -8.202636)
                  {
                      window.location = 'https://Jakarta.zapplerepair.com/';
                  }
                  else{
                      window.location = 'https://indonesia.zapplerepair.com/index.php';
                  }
            }
                
        </script> -->

</body>

</html>