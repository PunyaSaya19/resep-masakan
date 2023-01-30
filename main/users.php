<?php
require_once('../init.php');
helper(['flasher', 'auth', 'file_upload']);
$UserMdl = model('UserMdl');

// tambah Data
if(isset($_POST['tambah'])) {
    // upload avatar
    $upload = uploadFile($_FILES['avatar'], '../assets/img/users/');
    if($upload['status'] == false) {
        setFlasher('Oupss', 'error', $upload['msg']);
        return redirect('/main/users.php');
    } 
    $_POST['avatar'] = $upload['nama_gambar'];
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $UserMdl->insert($_POST);
    setFlashInsert();
    return redirect('/main/users.php');
}

$data = $UserMdl->findAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Users</title>

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
                        <h1>Users</h1>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-md-7 col-sm-12 mb-2">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="d-inline">Data</h4>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled list-unstyled-border">
                                            <?php foreach ($data as $dt) : ?>
                                                <li class="media">
                                                    <img class="mr-3 rounded-circle" width="50" src="<?= assets('img/users/' . $dt->avatar) ?>" alt="avatar">
                                                    <div class="media-body">
                                                        <div class="badge badge-pill badge-primary mb-1 float-right text-uppercase">
                                                            <?= $dt->role ?>
                                                        </div>

                                                        <h6 class="media-title">
                                                            <a href="#">
                                                                <?= $dt->name ?>
                                                            </a>
                                                        </h6>
                                                        <div class="text-small text-muted">
                                                            <a href="" class="text-info">Detail</a>
                                                            <div class="bullet"></div>
                                                            <a href="" class="text-primary">Edit</a>
                                                            <div class="bullet"></div>
                                                            <a href="" class="text-danger">Hapus</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5 col-sm-12">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4>Tambah Data</h4>
                                    </div>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="">Nama</label>
                                                <input type="text" class="form-control" name="name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Username</label>
                                                <input type="text" class="form-control" name="username" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Password</label>
                                                <input type="password" class="form-control" name="password" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Role</label>
                                                <select name="role" id="" class="form-control">
                                                    <option value="admin">Admin</option>
                                                    <option value="petugas">Petugas</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Avatar</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile" required name="avatar">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right bg-whitesmoke">
                                            <button type="submit" class="btn btn-success" name="tambah">
                                                Tambah
                                            </button>
                                        </div>
                                    </form>
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

</body>

</html>