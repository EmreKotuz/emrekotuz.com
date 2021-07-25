<?php
require_once 'inc-functions.php';

session_start();
/*if (@$_SESSION["girisKontrol"] == 1) {
    header("Location: anasayfa.php?i=cikis");
}*/





//Login
if (isset($_POST['submit'])) {

    echo $username = $_POST['kullanici_adi'];
    echo $password = $_POST['sifre'];


    $adminsor = $db->prepare("SELECT * FROM userLogin WHERE kullanici_adi=:username AND sifre=:pass");
    $adminsor->execute(array(
        'username' => $username,
        'pass' => $password
    ));

    $admincek = $adminsor->fetch(PDO::FETCH_ASSOC);

    if ($admincek) {
        echo $_SESSION['admin_username'] = $admincek['kullanici_adi'];

        header("Location: anasayfa.php");
  
    } else {
        header('Location: index.php?login=no');
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Girişi</title>
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style media="screen">
        body {
            background-image: url(img/loginback.jpg);
        }

        #yukseklik {
            margin-top: 12%;
        }

        @media screen and (max-width: 800px) {
            body {
                background-image: url(img/loginmobilback.jpg);
            }

            #yukseklik {
                margin-top: 42%;
            }

        }
    </style>

</head>

<body>

    <div class="container" id="yukseklik">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="color:#ff4d4d">Yönetici Paneli</h3>
                    </div>
                    <div class="panel-body">
                        <form action="" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Kullanıcı Adı" required name="kullanici_adi" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="******" required name="sifre" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Beni Hatırla
                                    </label>
                                </div>
                                <input type="submit" style="width:100%;" name="submit" value="Giriş Yap" class="btn btn-lg btn-success btn-danger">

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    /*if (isset($_POST['submit'])) {
        $kullanici_adi = $_POST['kullanici_adi'];
        $sifre = $_POST['sifre'];



        //WHERE kullanici_adi=:kadi AND sifre=:sifre
        $komut = $baglanti->prepare("SELECT * FROM userLogin  WHERE kullanici_adi='emrektz' AND sifre='emre'");
        /*$komut->execute(array(
        'kadi' => $kullanici_adi,
        'sifre' => $sifre
    ));
        $komut->execute();
        $sonuc = $komut->fetch(PDO::FETCH_ASSOC);
        if ($sonuc) {
            echo "<h1>" . $sonuc['kullanici_adi'] . "</h1>";
        } else {
            echo "yarra yedik.";
        }



        exit;


        if (@$_GET["i"] == "cikis") {
            echo "<p style='text-align:center; color:#8E24AA;margin-top:1%;'>Başarılı Bir Şekilde Çıkış Yaptınız</p>";
            // code...
        } elseif (@$_GET["i"] == "izinsizgiris") {
            echo "<p style='text-align:center; color:#8E24AA;margin-top:1%;'>Giriş Yapmanız Lazım!</p>";
        }
    }*/

    ?>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>