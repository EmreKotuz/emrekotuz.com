<?php
require_once 'inc-functions.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Ekle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">

      <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
      <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
      <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <style media="screen">

    body{
    background: url('resim/aa.jpg')
    no-repeat fixed center top;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;

    margin: 0;
    padding: 0;
    }

      #yukseklik{
        margin-top: 16%;
      }
      @media screen and (max-width: 600px)
      {
        #yukseklik{
          margin-top: 50%;
        }
      }
    </style>



    <?php
    if (@$_POST["submit"]) {

  $kullanici_adi = htmlspecialchars($_POST["kullanici_adi"], ENT_QUOTES, 'UTF-8');
  $sifre = htmlspecialchars($_POST["sifre"], ENT_QUOTES, 'UTF-8');

  $ekle = $db->prepare("insert into login(kullanici_adi,sifre)values(:kullanici_adi,:sifre)");
  $ekle->bindValue(":kullanici_adi",$kullanici_adi,PDO::PARAM_STR);
  $ekle->bindValue(":sifre",$sifre,PDO::PARAM_STR);


  if ($ekle->execute()) {
    header("Location: adminEkle.php?i=basarili");
    echo "başarılı";
   }else {
    header("Location: adminEkle.php?i=hata");
    echo "hata oluştu";
  }

}

    ?>
    <div class="container"  id="yukseklik">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="color:white; text-align:center;">Admin Ekle</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Kullanıcı Adı" required name="kullanici_adi" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="******" required name="sifre" type="password" value="">
                                </div>
                                <input type="submit" style="width:100%;" name="submit" value="Kayıt Et" class="btn btn-lg btn-success btn-danger">

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
