<!DOCTYPE html>
<html lang="en">
<head><title>Edit Data</title></head>
<?php
include "koneksi.php";
$id = $_GET['kode'];
$sql = mysqli_query($connect, "SELECT * FROM job
WHERE id='$id'");

foreach ($sql as $data => $key) : ?>

<body>
    <center><form action="proses_edit.php" method="GET"><table>
        <tr>
            <td><input type="number" name="id"
        value="<?= $key['id'] ?>" hidden></td>
        </tr>
        <tr>
            <td>Tanggal </td>
            <td><input type="date" name="tanggal"
            value="<?= $key['tanggal'] ?>"></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td><input type="textarea" name="deskripsi"
            value="<?= $key['deskripsi'] ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="edit"
            value="update Data"></td>
        </tr>
    </table>
</form></center>
    
</body>
<?php endforeach; ?>
</html>