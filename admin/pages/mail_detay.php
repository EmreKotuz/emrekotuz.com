<?php
require_once 'inc-functions.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mesajlar</title>

    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>
    <?php

    @$id = $_GET["id"];
    //okundu bilgisi
    $oku = $db->prepare("update mail set okundu = :a where id = :i");
    $oku->bindValue(":a", 1, PDO::PARAM_INT);
    $oku->bindValue(":i", $id, PDO::PARAM_INT);
    $oku->execute();




    if (@$_GET["is"] == "aktif") {

        if ($_GET["drm"] == 1) {
            $durum = 0;
        } else {
            $durum = 1;
        }

        $aktif = $db->prepare("update mail set aktif = :a where id = :i");
        $aktif->bindValue(":a", $durum, PDO::PARAM_INT);
        $aktif->bindValue(":i", $id, PDO::PARAM_INT);

        if ($aktif->execute()) {
            header("Location: mail.php?i=ekle");
        } else {
            header("Location: mail.php?i=hata");
        }
    }



    //düzenleye veri çekme
    $cek = $db->prepare("select * from mail where id = :id");
    $cek->bindValue(":id", $id, PDO::PARAM_INT);
    $cek->execute();
    $row = $cek->fetch(PDO::FETCH_ASSOC);




    ?>


    <div id="wrapper">

        <?php
        require_once 'inc-menu.php';
        ?>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Mesaj (<?= $id ?>)</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="mail.php">Geri Dön</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form>



                                        <div class="form-group">
                                            <p> <b>Adı - Soyadı : </b><?= $row["isim"] ?></p>
                                            <p> <b>E-maili : </b><?= $row["mail"] ?></p>
                                            <p> <b>Mesajı : </b> <?= $row["mesaj"] ?> </p>

                                        </div>

                                        <a href=" mail.php" class="btn btn-success btn-xs">Geri Dön</a><br><br>


                                    </form>

                                </div>

                                <!-- jQuery -->
                                <script src=" ../bower_components/jquery/dist/jquery.min.js"></script>

                                <!-- Bootstrap Core JavaScript -->
                                <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

                                <!-- Metis Menu Plugin JavaScript -->
                                <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

                                <!-- Custom Theme JavaScript -->
                                <script src="../dist/js/sb-admin-2.js"></script>


                                <script src='../js/tinymce.min.js'></script>

                                <script>
                                    tinymce.init({
                                        selector: '#mytextarea'
                                    });
                                </script>
</body>

</html>