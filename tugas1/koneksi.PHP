<?php
$host  ="localhost";
$user  ="root";
$pass  ="";
$db    ="tugas1";

$connect = mysqli_connect($host,$user,$pass,$db);
if($connect){
    echo"";
}
else{
    echo "gagal";
}

?>