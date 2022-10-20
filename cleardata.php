<?php
$server='127.0.0.1';
$username='root';
$password='';
$dbname= 'laxmi-lottery';
$connectdb=mysqli_connect($server,$username,$password,$dbname);
$sql = "TRUNCATE TABLE randdata";
    $delete = mysqli_query($connectdb, $sql);
if ($delete) {
    echo "<script>alert('Cleared Data...');document.location = 'dashboard.php';</script>";
}

?>