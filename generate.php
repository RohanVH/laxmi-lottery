<?php
include("config.php");
$connectdb=mysqli_connect($server,$username,$password,$dbname);
$result = mysqli_query($connectdb, "SELECT * FROM randdata");
if(mysqli_num_rows($result)==0){
    $num=1;
    while ($num < 49) {
        $x = 2; //pair of two digits
        $aa  = substr(str_shuffle("0123456789"), 0, $x);
        $bb = substr(str_shuffle("2345678910"), 0, $x);
        $cc = substr(str_shuffle("2341056789"), 0, $x);
        $v1 = strval($aa);
        $v2 = strval($bb);
        $v3 = strval($cc);

        $a = $v1[strlen($v1) - 2];
        $b = $v2[strlen($v2) - 2];
        $c = $v3[strlen($v3) - 2];

        $time = '';
        $status = '';
        $sql1 = "INSERT INTO `randdata` VALUES ('', '$aa', '$bb', '$cc', '$a', '$b', '$c', '', '')";
        $datainsert = mysqli_query($connectdb, $sql1);
        if($datainsert){

            $num = $num + 1;
        }
    }
    echo "<script>alert('New Data Uploaded...');document.location = 'dashboard.php';</script>";
}

?>
