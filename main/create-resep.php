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
                        <h1>Resep Baru</h1>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Buat Resep</h4>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="POST">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Nama Resep</label>
                                                        <input type="text" class="form-control" name="name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Penulis</label>
                                                        <input type="text" class="form-control" name="penulis" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Publish</label>
                                                        <input type="date" class="form-control" name="publish" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Waktu Memasak (menit)</label>
                                                        <input type="number" class="form-control" name="time" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Porsi</label>
                                                        <input type="number" class="form-control" name="porsi" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Level Masakan</label>
                                                        <input type="text" class="form-control" name="level" required placeholder="Mudah, Sulit">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">Deskripsi</label>
                                                        <textarea name="deskripsi" id="deskripsi" class="form-control" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">Cara Membuat</label>
                                                        <textarea name="step" id="step" class="form-control" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">Bahan-Bahan</label>
                                                        <textarea name="komposisi" id="komposisi" class="form-control" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">Catatan Tambahan</label>
                                                        <textarea name="catatan" id="catatan" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">Gambar</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile" name="gambar" required>
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-success w-100" name="tambah">
                                                        Tambah Resep
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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

    <script>
        $(document).ready(function() {
            $('#deskripsi').summernote({
                height: 250,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    // ['fontname', ['fontname']],
                    // ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    // ['table', ['table']],
                    // ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                ],
            });

            $('#step').summernote({
                height: 250,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    // ['fontname', ['fontname']],
                    // ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    // ['table', ['table']],
                    // ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                ],
            });

            $('#komposisi').summernote({
                height: 250,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    // ['fontname', ['fontname']],
                    // ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    // ['table', ['table']],
                    // ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                ],
            });

            $('#catatan').summernote({
                height: 250,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    // ['fontname', ['fontname']],
                    // ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    // ['table', ['table']],
                    // ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                ],
            });


        });
    </script>

</body>

</html>