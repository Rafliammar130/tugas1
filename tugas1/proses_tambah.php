<?php
    include "koneksi.php";

    $tanggal= $_POST['tanggal'];
    $deskripsi = $_POST['deskripsi'];


    $tambah = $_POST['tambah'];

    if ($tambah){
        $sql = mysqli_query($connect, "INSERT INTO job
        VALUES('', '$tanggal', '$deskripsi')");
        if($sql){?>
            <script>
                alert('Tambah Data Sukses');
                window.location.href = "tampilan.php";
            </script>
    <?php
        }else{
            echo "Tambah Data Gagal";
        }
    }
    
    ?>