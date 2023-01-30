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

    <div class="jumbotron container mb-5 text-center">
        <i class="font-weight-bold">
            " Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore error reiciendis quidem placeat ducimus pariatur qui similique harum excepturi eum vel quae quaerat esse velit non beatae consequatur, fugit alias. Architecto vel minima quibusdam placeat veritatis dicta corrupti itaque quidem, pariatur delectus fugit dignissimos corporis natus explicabo modi! Quaerat, in. "
        </i>
    </div>

    <!-- ##### Posts Area End ##### -->
    <div class="bueno-post-area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-2">
                    <h4>Resep Baru</h4>
                </div>
                <!-- Post Area -->
                <div class="col-12 ">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-1 d-flex flex-wrap mb-30">
                        <!-- Blog Thumbnail -->
                        <div class="blog-thumbnail">
                            <img src="<?= assets('img-frontend/resep/9.jpg') ?>" alt="">
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="#" class="post-tag">The Best</a>
                            <a href="#" class="post-title">Friend eggs with ham</a>
                            <div class="post-meta">
                                <a href="#" class="post-date">July 11, 2018</a>
                                <a href="#" class="post-author">By Julia Stiles</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo id elit bibendum pharetra non vitae lectus. Mauris libero felis, dapibus a ultrices sed, commodo vitae odio. Sed auctor tellus quis arcu tempus.</p>
                            <a href="detail-resep.html" class="btn bueno-btn">Read More</a>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-1 d-flex flex-wrap mb-30">
                        <!-- Blog Thumbnail -->
                        <div class="blog-thumbnail">
                            <img src="<?= assets('img-frontend/resep/9.jpg') ?>" alt="">
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="#" class="post-tag">The Best</a>
                            <a href="#" class="post-title">Mushrooms with pork chop</a>
                            <div class="post-meta">
                                <a href="#" class="post-date">July 11, 2018</a>
                                <a href="#" class="post-author">By Julia Stiles</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo id elit bibendum pharetra non vitae lectus. Mauris libero felis, dapibus a ultrices sed, commodo vitae odio. Sed auctor tellus quis arcu tempus.</p>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-1 d-flex flex-wrap mb-30">
                        <!-- Blog Thumbnail -->
                        <div class="blog-thumbnail">
                            <img src="<?= assets('img-frontend/resep/9.jpg') ?>" alt="">
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="#" class="post-tag">The Best</a>
                            <a href="#" class="post-title">Birthday cake with chocolate</a>
                            <div class="post-meta">
                                <a href="#" class="post-date">July 11, 2018</a>
                                <a href="#" class="post-author">By Julia Stiles</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo id elit bibendum pharetra non vitae lectus. Mauris libero felis, dapibus a ultrices sed, commodo vitae odio. Sed auctor tellus quis arcu tempus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Posts Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <?php include_once('layout/copyright.php') ?>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <?php include_once('layout/footer.php') ?>
    
</body>

</html>