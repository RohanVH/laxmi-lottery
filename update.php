<?php
$server='127.0.0.1';
$username='root';
$password='';
$dbname= 'laxmi-lottery';
$connectdb=mysqli_connect($server,$username,$password,$dbname);
$result = mysqli_query($connectdb, "SELECT * FROM randdata");
if (mysqli_num_rows($result)!=0){
    $number=1;
    while($number<49){
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
        $sql = "UPDATE `randdata` SET `AA` = '$aa', `BB` = '$bb', `CC` = '$cc', `a` = '$a', `b` = '$b', `c` = '$c',`time`='$time',`status`='$status' WHERE `id` = $number";
        $dataupdate = mysqli_query($connectdb, $sql);
        if($dataupdate){

            $number=$number+1;
        }
    }
    echo "<script>alert('Updated...');document.location = 'dashboard.php';</script>";
}
    
