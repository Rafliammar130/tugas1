<!DOCTYPE html>
<html lang="en">
<head><title>Biodata</title></head>
<body>
    <a href="tambah_data.php"><center><button>Tambah Data</button></center></a><br><br>
    <table style="margin-left:auto;margin-right:auto" border="1">
        <tr style="text-align: center;" >
            <th>NO</th>
            <th>TANGGAL</th>
            <th>DESKRIPSI</th>
            <th>AKSI</th>
        </tr>

        <?php
        require_once('koneksi.php');
        $sql = mysqli_query($connect, "SELECT * FROM  job");
        if (mysqli_num_rows($sql)) {
            $no = 1;
            foreach ($sql as $data) {
        ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data['tanggal'] ?></td>
                    <td><?= $data['deskripsi'] ?></td>
                    <td>
                    <a href="hapus_data.php?kode=<?= $data['id']; ?>" class="edit">
                        Hapus
                    </a>
                    <a href="edit_data.php?kode=<?= $data['id']; ?>" class="edit">
                        Edit
                    </a>
                    </td>
                </tr>
        <?php
        $no++;
            }
        }
        ?>
        
    </table>
</body>
</html>