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

    <div class="big-posts-area mb-50">
        <div class="container">
            <!-- Single Big Post Area -->
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="big-post-thumbnail mb-50">
                        <img src="<?= assets('img-frontend/about.jpg') ?>" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="big-post-content mb-50">
                        <a href="#" class="post-title">
                            Tentang Kami
                        </a>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam cupiditate atque molestiae maxime odit? Quas distinctio dolore voluptas, doloribus soluta fuga vel, doloremque velit rerum numquam dolores ipsam iure suscipit illum a, dicta et laborum? Totam facilis quam assumenda ut nemo velit iusto, rerum facere mollitia, esse odit sequi architecto distinctio. Cupiditate nulla quidem ad saepe molestiae, itaque voluptate natus aperiam, voluptates nostrum vel, pariatur commodi ex ea dolorem. Aliquid, numquam iure. Provident, vitae accusantium et recusandae ad magnam rerum molestiae fugiat voluptatibus distinctio doloribus nihil debitis quia sit ab. Provident mollitia a nesciunt quisquam quos delectus distinctio excepturi vero omnis. Assumenda debitis amet perspiciatis. Laudantium at, aliquid optio nostrum hic a. Impedit numquam maiores magni amet placeat quam qui tenetur nulla, ea natus ratione voluptatibus id aperiam perspiciatis saepe.
                        </p>
                        <!-- <a href="#" class="btn bueno-btn">Read More</a> -->
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