<?php
include('config.php');
include('config_lotteryhistory.php');
$id=2;

$start_time='09:00am';
$end_time='09:15am';
$date=date('d-m-Y');   //format dd-mm--yy
$id=$id-1;

//update status in randdata table 
$update_status="UPDATE randdata SET `time` = '$end_time', `status`= '✅' WHERE id = $id";
$status_data = mysqli_query($connectdb, $update_status);
if($status_data){
    echo '';
}   
else{
    echo '<script>alert("ERROR: failed to update status.");</script>';
}


// creating 48 empty rows in history table
$n=0;
while($n<=48){
    $insert_blank = "INSERT INTO history Values('','-','-','-','-','-','-','-','-','-')"; //insert blank values
    $inserting = mysqli_query($connectdb1, $insert_blank);
    if ($inserting) {
        echo '';
    }
    $number=$number+1;
}
$id=$id-1;
$displayed_values = mysqli_query($connectdb, "SELECT AA,BB,CC,a,b,c FROM randdata WHERE id =$id");
$row = mysqli_fetch_row($displayed_values);
if($row){
    $aa = $row[0];
    $bb = $row[1];
    $cc = $row[2];
    $a = $row[3];
    $b = $row[4];
    $c = $row[5];
    $update_blankTable="UPDATE history SET `date`='$date' start_time='$start_time',AA='$aa',BB='$bb',CC='$cc',a='$a',b='$b',c='$c',end_time='$end_time' WHERE id=$id"; //update blank values
    $process_update=mysqli_query($connectdb,$update_blankTable);
    if($process_update){
        echo '';
    }
}
?>