<?php
require_once('../init.php');
helper(['flasher']);
$ResepMdl = model('ResepMdl');

$datas = $ResepMdl->findAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Title</title>

    <!-- include header -->
    <?php include_once('layout/header.php') ?>

</head>

<body>
    <div id="app">
        <div class="main-wrapper">

            <!-- include navbar -->
            <?php include_once('layout/navbar.php') ?>

            <!-- include sidebar -->
            <?php include_once('layout/sidebar.php') ?>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Dashboard</h1>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <?php foreach ($datas as $dt) : ?>
                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>
                                                <?= $dt->name ?>
                                            </h4>
                                        </div>
                                        <div class="card-body pb-0">
                                            <div class="chocolat-parent">
                                                <a href="<?= base_url() ?>/detail-resep.php?id=<?= $dt->id ?>" class="chocolat-image" title="Just an example" target="_blank">
                                                    <div data-crop-image="285">
                                                        <img alt="image" src="<?= assets('img-frontend/resep/' . $dt->gambar) ?>" class="img-fluid">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <a href="<?= base_url() ?>/detail-resep.php?id=<?= $dt->id ?>" class="btn btn-info btn-icon mr-1">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="<?= base_url() ?>/main/edit-resep.php?id=<?= $dt->id ?>" class="btn btn-primary btn-icon mr-1">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="<?= base_url() ?>/main/dashboard.php?id_hps=<?= $dt->id ?>" class="btn btn-danger btn-icon mr-1">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>
            </div>

            <!-- include copyright -->
            <?php include_once('layout/copyright.php') ?>
        </div>
    </div>

    <!-- include footer -->
    <?php include_once('layout/footer.php') ?>

</body>

</html>