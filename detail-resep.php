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

    <section class="post-news-area section-padding-0-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-md-8">
                    <div class="post-details-content mb-100">
                        <div class="blog-thumbnail mb-50">
                            <img src="<?= assets('img-frontend/resep/9.jpg') ?>" alt="">
                        </div>
                        <div class="blog-content">
                            <h4 class="post-title">Friend eggs with ham</h4>
                            <div class="post-meta mb-4">
                                <a href="#" class="post-date">July 11, 2018</a>
                                <a href="#" class="post-author">By Julia Stiles</a>
                            </div>

                            <div class="deskripsi mb-3">
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis, harum. Minus molestias, aperiam asperiores ipsa tenetur obcaecati quasi at eligendi est. Praesentium nam, recusandae quos doloremque sequi obcaecati tenetur iusto, molestiae voluptatem similique, dolores molestias placeat totam hic? Delectus fugiat, laborum perferendis expedita ut architecto vel officia blanditiis soluta culpa ipsam nulla aut ex aperiam similique inventore commodi. Quaerat aliquam minima esse consequatur necessitatibus magni optio, vitae earum nesciunt. Explicabo hic vero molestiae velit cumque.
                                </p>
                            </div>

                            <div class="step">
                                <h5 mb-2>Cara Memasak : </h5>
                                <h6>Step 1</h6>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores rerum sed et earum sapiente. Qui vel accusantium dolores neque nihil aliquam blanditiis nisi, eius repudiandae possimus, voluptate eum quas? Dolores alias vel natus sapiente harum nobis, adipisci, voluptatibus pariatur molestias, nisi commodi quidem quibusdam aliquam porro dolore repudiandae obcaecati praesentium.
                                </p>
                                <h6>Step 2</h6>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores rerum sed et earum sapiente. Qui vel accusantium dolores neque nihil aliquam blanditiis nisi, eius repudiandae possimus, voluptate eum quas? Dolores alias vel natus sapiente harum nobis, adipisci, voluptatibus pariatur molestias, nisi commodi quidem quibusdam aliquam porro dolore repudiandae obcaecati praesentium.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <!-- Info -->
                    <div class="recipe-info">
                        <h5>Info</h5>
                        <ul class="info-data">
                            <!-- <li><img src="img/core-img/eye.png" alt=""> <span>1,577 Views</span></li> -->
                            <li><img src="<?= assets('frontend/img/core-img/alarm-clock.png') ?>" alt=""> <span>30 min</span></li>
                            <li><img src="<?= assets('frontend/img/core-img/tray.png') ?>" alt=""> <span>4 Porsi</span></li>
                            <li><img src="<?= assets('frontend/img/core-img/sandwich.png') ?>" alt=""> <span>Mudah</span></li>
                            <!-- <li><img src="img/core-img/compass.png" alt=""> <span>200F</span></li> -->
                        </ul>
                    </div>

                    <!-- Ingredients -->
                    <div class="ingredients mb-4">
                        <h5>Ingredients</h5>

                        <div class="pl-4">
                            <p>1. Garam</p>
                            <p>2. minyak</p>
                            <p>3. Gas</p>
                            <p>4. Bawang</p>
                        </div>

                    </div>

                    <div class="catatan bg-light px-4 py-4 text-white">
                        <h5>Catatan</h5>
                        <p>
                            1. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, nobis sunt modi magnam rerum architecto, consectetur adipisci excepturi id quasi atque. Molestias harum velit eius debitis suscipit similique facere tempora esse magnam doloremque sint facilis voluptatem a sit, pariatur mollitia? Dolor distinctio exercitationem magni alias, ipsam explicabo odio eveniet fugit?
                        </p>
                        <p>
                            2. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, nobis sunt modi magnam rerum architecto, consectetur adipisci excepturi id quasi atque. Molestias harum velit eius debitis suscipit similique facere tempora esse magnam doloremque sint facilis voluptatem a sit, pariatur mollitia? Dolor distinctio exercitationem magni alias, ipsam explicabo odio eveniet fugit?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ##### Footer Area Start ##### -->
    <?php include_once('layout/copyright.php') ?>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <?php include_once('layout/footer.php') ?>

</body>

</html>