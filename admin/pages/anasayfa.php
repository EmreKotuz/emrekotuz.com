<?php require_once 'inc-functions.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Paneli</title>
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- fontlar -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/timeline.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <?php
        //diğer php dosyasını getirme kodu
        require_once 'inc-menu.php';

        //kaç okunmamış mesaj olduğu
        $okunmamis = $db->prepare("select * from mail where okundu = :o");
        $okunmamis->bindValue(":o", 0, PDO::PARAM_INT);
        $okunmamis->execute();
        $cntMesaj = $okunmamis->rowCount();

        //kaç blog yazısı olduğu
        $blog = $db->prepare("select * from mail");
        $blog->execute();
        $cntBlog = $blog->rowCount();


        $is = $db->prepare("select * from isler");
        $is->execute();
        $isler = $is->fetch(PDO::FETCH_ASSOC)
        ?>




        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Ana Sayfa</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?= $cntMesaj ?></div>
                                    <div>Gelen mesajlar</div>
                                </div>
                            </div>
                        </div>
                        <a href="mail.php">
                            <div class="panel-footer">
                                <span class="pull-left">Detayları Gör</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div id="contact" class="box-shadow-full">
                    <div class="row">
                        <div class="col-md-5" style="margin-left: 10%;">
                            <div>
                                <form action="" method="post">
                                    <div id="errormessage"></div>
                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <div class="form-group">
                                                <input type="text" name="tamamlanan_is" style="width: 100px; height:50px;" class="form-control" id="name" value="<?= $isler["tamamlanan_is"] ?>" data-rule="minlen:1"></input>

                                                <div class="validation"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-4">
                                            <div class="form-group">
                                                <input type="text" name="yil" style="width: 100px; height:50px;" class="form-control" id="name" value="<?= $isler["yil"] ?>" data-rule="minlen:1"></input>
                                                <div class="validation"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-4">
                                            <div class="form-group">
                                                <input type="text" name="musteri" style="width: 100px; height:50px;" class="form-control" id="name" value="<?= $isler["musteri"] ?>" data-rule="minlen:1"></input>
                                                <div class="validation"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="submit" name="kaydet" value="Kaydet" style="width: 100px; height:50px; background-color: #4CAF50; color: white;border: 2px solid #4CAF50;">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php
                        if (@$_POST["kaydet"]) {

                            $tamamlanan_is = htmlspecialchars($_POST["tamamlanan_is"], ENT_QUOTES, 'UTF-8');
                            $yil = htmlspecialchars($_POST["yil"], ENT_QUOTES, 'UTF-8');
                            $musteri = htmlspecialchars($_POST["musteri"], ENT_QUOTES, 'UTF-8');

                            $guncelle = $db->prepare("update isler set tamamlanan_is = :tamamlanan_is, yil = :yil, musteri= :musteri");
                            $guncelle->bindValue(":tamamlanan_is", $tamamlanan_is, PDO::PARAM_INT);
                            $guncelle->bindValue(":yil", $yil, PDO::PARAM_INT);
                            $guncelle->bindValue(":musteri", $musteri, PDO::PARAM_INT);



                            if ($guncelle->execute()) {
                                header("Location: anasayfa.php?i=guncellendi");
                                echo "başarıyla kayıt edildi";
                            } else {
                                //hata mesajı
                                //print_r($ekle->errorInfo());
                                header("Location: anasayfa.php?i=hata_olustu");
                                echo "kayıt edilemedi";
                            }
                        }

                        ?>
                        <!-- /#wrapper -->

                        <!-- jQuery -->
                        <script src="../bower_components/jquery/dist/jquery.min.js"></script>

                        <!-- Bootstrap Core JavaScript -->
                        <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

                        <!-- Metis Menu Plugin JavaScript -->
                        <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

                        <!-- Morris Charts JavaScript -->
                        <script src="../bower_components/raphael/raphael-min.js"></script>
                        <script src="../bower_components/morrisjs/morris.min.js"></script>
                        <script src="../js/morris-data.js"></script>

                        <!-- Custom Theme JavaScript -->
                        <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>