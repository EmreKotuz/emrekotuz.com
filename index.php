<?php
require_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>emrekotuz.com</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/ek.png" rel="icon">
  <link href="img/ek.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="" href="#page-top">Emre KÖTÜZ</a>

      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home">GİRİŞ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">Hakkımızda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#service">SERVİSLER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" style="color:black;" href="#paket">Paketler</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" style="color:black;" href="#contact">İLETİŞİM</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(img/intro-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">Merhaba, ben Emre</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Web Tasarımcı, Web Geliştirici</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

  <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="title-box-2">
                <h5 class="title-left">
                  Hakkımda
                </h5>
              </div>
              <p class="lead">
                Bilişim sektörüne küçük yaşta başladım. Bunun avantajlarından birisi çoğu yazılım dilleriyle projeler geliştirmiş olmam.
                Web uzmanlığı beni ve ekibimi içine aldığı için, yaratıcılığımızı gösterebileceğimiz alan.
              </p>
              <p class="lead">
                Normalden uzak sadeliğe yakın tasarımlar çıkarıp web sitesi kuruyoruz. 6 yıldır bu işin içinde küçük büyük tüm projeleri teslim ettik.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </section>

  <!--/ Section Services Star /-->
  <section id="service" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              SERVİSLER
            </h3>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-monitor"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Web Tasarım</h2>
              <p class="s-description text-center">
                Sade ve hoş web siteleri tasarlarlıyoruz.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-code-working"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Web Geliştirme</h2>
              <p class="s-description text-center">
                Harika web tasarımlarının üzerini işlevlendirip biraz harekât katıyoruz.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-android-phone-portrait"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Mobile Uyum</h2>
              <p class="s-description text-center">
                Tüm proje ve çalışmalarımız mobile uyumludur.
              </p>
            </div>
          </div>
        </div>
      </div>
      <p class="text-center">
        <a class="btn btn-outline-primary js-scroll" style="margin-bottom:5%;" href="#paket">Paketleri incele</a>
      </p>
    </div>
  </section>
  <!--/ Section Services End /-->
  <?php
  $is = $db->prepare("select * from isler");
  $is->execute();
  $isler = $is->fetch(PDO::FETCH_ASSOC)
  ?>
  <div class="section-counter paralax-mf bg-image" style="background-image: url(img/counters-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-lg-4">
          <div class="counter-box">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">
                <?= $isler["tamamlanan_is"] ?>
              </p>
              <span class="counter-text">TAMAMLANAN İŞLER</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-4">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">
                <?= $isler["yil"] ?>
              </p>
              <span class="counter-text">YILLARIN DENEYİMİ</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-4">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ios-people"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">
                <?= $isler["musteri"] ?>
              </p>
              <span class="counter-text">Toplam Müşteri</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--/ Section Blog Star /-->
  <section id="paket" class="blog-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Paketler
            </h3>
            <p class="subtitle-a">
              BİR SONRAKİ SÜREÇ, SİZİN MÜŞTERİNİZDİR.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <p href=""><img src="img/post-1.jpg" alt="" class="img-fluid"></p>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category">Kod Paketi</h6>
                </div>
              </div>
              <h3 class="card-title">
                <p href="">Sadece tasarım</p>
              </h3>
              <p class="card-description">
                -Yalnızca Tasım kodlarını teslim ediyoruz,<br>
                -En fazla 7 sayfalık web site,<br>
                -Sunucu ve alan adı size aittir
              </p>
              <h5>399 TL</h5>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <p>
                  <span class="author">Kod Paket</span>
                </p>
              </div>
              <div class="post-date">
                <span class="ion-ios-clock-outline"></span> 1-3 Gün
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <p href=""><img src="img/post-2.jpg" alt="" class="img-fluid"></p>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category">HOSTİNG PAKET</h6>
                </div>
              </div>
              <h3 class="card-title">
                <p href="">Hosting - Domain içine</p>
              </h3>
              <p class="card-description">
                -Web sitenizi yayınlıyoruz,<br>
                -sunucu (1 yıllık), <br>
                -.com uzantı (1 yıllık), <br>
                -En fazla 13 sayfalık web site<br>
              </p>
              <h5>799 TL</h5>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <p>
                  <span class="author">Hosting Paketi</span>
                </p>
              </div>
              <div class="post-date">
                <span class="ion-ios-clock-outline"></span> 1-3 Gün
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <p href=""><img src="img/post-3.jpg" alt="" class="img-fluid"></p>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category">TÜM PAKET</h6>
                </div>
              </div>
              <h3 class="card-title">
                <p href="">Her Şey İçine</p>
              </h3>
              <p class="card-description">
                -Web sitenizi yayınlıyoruz.<br>
                -Çok daha hızlı sunucu (1 yıllık), <br>
                -.com uzantı (1 yıllık), <br>
                -SSL sertifikası (1 yıllık), <br>
                -En fazla 20 sayfalık web site<br>
              </p>
              <h5>1299 TL</h5>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <p>
                  <span class="author">Tüm Paket</span>
                </p>
              </div>
              <div class="post-date">
                <span class="ion-ios-clock-outline"></span> 1-4 Gün
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Section Blog End /-->

  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Bize Mesajınızı Gönderin
                    </h5>
                  </div>
                  <div>

                    <form action="" method="post">
                      <div id="sendmessage">Lütfen eksiksik doldurunuz</div>
                      <div id="errormessage"></div>
                      <div class="row">
                        <div class="col-md-12 mb-4">
                          <div class="form-group">
                            <input type="text" name="isim" class="form-control" id="name" placeholder="İsminiz" data-rule="minlen:1" data-msg="Lütfen isminizi yazınız" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-4">
                          <div class="form-group">
                            <input type="email" class="form-control" name="mail" id="email" placeholder="E-mail adresiniz" data-rule="email" data-msg="Geçerli email adresi yazınız" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-4">
                          <div class="form-group">
                            <textarea class="form-control" name="mesaj" rows="5" data-rule="required" data-msg="Lütfen boş bırakmayınız" placeholder="Mesajınız"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <input type="submit" name="submit" value="Mesajı Gönder" class="button button-a button-big button-rouded">
                        </div>
                        <?php

                        if (isset($_POST["submit"])) {
                          $isim = htmlspecialchars($_POST["isim"], ENT_QUOTES, 'UTF-8');
                          $mail = htmlspecialchars($_POST["mail"], ENT_QUOTES, 'UTF-8');
                          $mesaj = htmlspecialchars($_POST["mesaj"], ENT_QUOTES, 'UTF-8');

                          $ekle = $db->prepare("insert into mail(isim,mail,mesaj)values(:isim,:mail,:mesaj)");
                          $ekle->bindValue(":isim", $isim, PDO::PARAM_STR);
                          $ekle->bindValue(":mail", $mail, PDO::PARAM_STR);
                          $ekle->bindValue(":mesaj", $mesaj, PDO::PARAM_STR);
                          $kime = "kotuzapp@gmail.com";
                          $isim = $_POST["isim"];
                          $mail = $_POST["mail"];
                          $mesaj = $_POST["mesaj"];
                          if (mail($kime, $isim, $mail, $mesaj)) {
                            echo "";
                          } else {
                            echo "";
                          }

                          if ($ekle->execute()) {
                            echo "Mesajınız Başarıyla Ulaşmıştır.";
                          } else {
                            echo "Hata Oluştu Lütfen Tekrar Deneyiniz";
                          }
                        }

                        ?>
                      </div>
                    </form>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Temasa geçin
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                      Mesajlarınıza çok hızlı döneceğimizden emin olabilirsiniz. Tüm sorularınızı sorabilir yardım isteyebilirsiniz. Kendinize iyi bakın, hoşçakalın. :)
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright"> 2021 <strong>&copy;</strong> emrekotuz.com</p>
              <div class="credits">
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>

</html>