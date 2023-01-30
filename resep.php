<?php
require "init.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Bueno - Food Blog HTML Template</title>

    <?php include_once('layout/header.php') ?>

</head>

<body>
    <!-- Preloader -->
    <?php include_once('layout/preload.php') ?>

    <!-- ##### Header Area Start ##### -->
    <?php include_once('layout/navbar.php') ?>
    <!-- ##### Header Area End ##### -->

    <div class="post-catagory section-padding-0-0 mb-70">
        <div class="container">
            <div class="row">
                <!-- Single Post Catagory -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-catagory mb-30">
                        <img src="<?= assets('img-frontend/resep/9.jpg') ?>" alt="">
                        <!-- Content -->
                        <div class="catagory-content-bg">
                            <div class="catagory-content">
                                <a href="<?= base_url() ?>/detail-resep.php" class="post-tag">36 min</a>
                                <a href="<?= base_url() ?>/detail-resep.php" class="post-title">Nama Resep</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Post Catagory -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-catagory mb-30">
                        <img src="<?= assets('img-frontend/resep/9.jpg') ?>" alt="">
                        <!-- Content -->
                        <div class="catagory-content-bg">
                            <div class="catagory-content">
                                <a href="#" class="post-tag">36 min</a>
                                <a href="#" class="post-title">Nama Resep</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Post Catagory -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-catagory mb-30">
                        <img src="<?= assets('img-frontend/resep/9.jpg') ?>" alt="">
                        <!-- Content -->
                        <div class="catagory-content-bg">
                            <div class="catagory-content">
                                <a href="#" class="post-tag">36 min</a>
                                <a href="#" class="post-title">Nama Resep</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Post Catagory -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-catagory mb-30">
                        <img src="<?= assets('img-frontend/resep/9.jpg') ?>" alt="">
                        <!-- Content -->
                        <div class="catagory-content-bg">
                            <div class="catagory-content">
                                <a href="#" class="post-tag">36 min</a>
                                <a href="#" class="post-title">Nama Resep</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Footer Area Start ##### -->
    <?php include_once('layout/copyright.php') ?>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <?php include_once('layout/footer.php') ?>

</body>

</html>