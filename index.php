<?php
require './connection.php';
$response = $conn->query("SELECT * FROM tbl_siswa_05");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/font.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Data - siswa</title>
</head>

<body class="app">
    <div class="d-flex sidebar offcanvas-sm offcanvas-md flex-column flex-shrink-0 p-3 text-white bg-dark offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 280px;">
        <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-4">Pendataan</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li>
                <a href="../admin/" class="nav-link text-white active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" class="bi bi-person-gear me-1 mb-1" viewBox="0 0 16 16">
                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                    </svg>
                    <span>Siswa</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="app-body h-100 p-1 w-100 bg-light">
        <div class="card p-4 h-100 w-100">
            <div class="head d-flex justify-content-between">
                <h4 class=" m-0 p-0">Manage Siswa</h4>
                <a class="btn btn-dark btn-sm d-lg-none d-md-none" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list text-white" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </a>
            </div>
            <hr>
            <div class="btns text-end">
                <a href="simpan.php" class=" my-2 btn btn-dark">Add Data</a>
            </div>
            <div class=" table-responsive" id="table">
                <table class="table align-middle">
                    <thead>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Telepon</th>
                        <th>Password</th>
                        <th>Jurusan</th>
                        <th></th>
                    </thead>
                    <?php $i = 1;
                    foreach ($response as $item) : ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $item['nmsiswa05'] ?></td>
                            <td><?= $item['tlpsiswa05'] ?></td>
                            <td><?= $item['jursiswa05'] ?></td>
                            <td>
                                <a href="edit.php?id=<?= $item['idsiswa05'] ?>" class=" btn btn-sm btn-dark">Edit</a>
                                <a href="delete.php?id=<?= $item['idsiswa05'] ?>" class=" btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>