<?php
include "koneksi.php";

$id = $_GET['kode'];
$sql = mysqli_query($connect, "DELETE FROM job WHERE id='$id'");
if ($sql) { ?>
    <script>
        alert('Hapus Data Sukses');
        window.location.href = "tampilan.php";
    </script>
<?php
} else {
    echo "Hapus Data Gagal";
}
?>