<?php
require './connection.php';

$id = $_GET['id'];

$delete = $conn->query("DELETE FROM tbl_siswa_05 WHERE idsiswa05='$id'");
if ($delete) {
    echo '<script>alert("Data telah berhasil dihapus");
            location.replace("index.php")</script>';
};
