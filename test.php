<?php
include('config.php');
include('config_lotteryhistory.php');
$id=2;


$start_time='09:00am';
$end_time='09:15am';
$date=date('d-m-Y');   //format dd-mm--yy
$id=$id-1;
$update_status="UPDATE randdata SET `time` = '$end_time', `status`= 'completed' WHERE id = $id";
$status_data = mysqli_query($connectdb, $update_status);
if($status_data){
    echo '';
}   
else{
    echo '<script>alert("ERROR: failed to update status.");</script>';
}
$dbcreate="create database if not exists `history`";
mysqli_query($connectdb1,$dbcreate);
// $date=date('d-m-Y');
// $date=strval($date);
// $createTable="CREATE TABLE $date(id int NOT NULL AUTO_INCREMENT,start_time varchar(255),AA varchar(25),BB varchar(25),CC varchar(25),a varchar(25),b varchar(25)c varchar(25),end_time varchar(25))";
// mysqli_query($connectdb1,$createTable);
// $creating=mysqli_query($connectdb1,$createTable);
// if($creating){
//     echo '';
// }

$insert_blank="INSERT INTO $date Values('','-','-','-','-','-','-','-','-')"; //insert blank values
$inserting=mysqli_query($connectdb1,$insert_blank);
if($inserting){
    echo '';
}

// $id=$id-1;
// $displayed_values = mysqli_query($connectdb, "SELECT AA,BB,CC,a,b,c FROM randdata WHERE id =$id");
// $row = mysqli_fetch_row($displayed_values);
// if($row){
//     $aa = $row[0];
//     $bb = $row[1];
//     $cc = $row[2];
//     $a = $row[3];
//     $b = $row[4];
//     $c = $row[5];
//     $update_blankTable="UPDATE $date SET start_time='$start_time',AA='$aa',BB='$bb',CC='$cc',a='$a',b='$b',c='$c',end_time='$end_time' WHERE id=$id"; //update blank values
//     $process_update=mysqli_query($connectdb1,$update_blankTable);
//     if($process_update){
//         echo '';
//     }
// }





//     $history="SELECT * from jodi_single";
//     $check = mysqli_query($connectdb1, $history);
//     if($check){
//         echo '';
//     }
//     else{
//         echo '';
//     }
    
//             echo '';
//             $update_to_history="UPDATE jodi_single SET date='$date',start_time='$start_time',AA='$aa',BB='$bb',CC='$cc',a='$a',b='$b',c='$c',end_time='$end_time' WHERE id=1";
        
//             $dataupdate1 = mysqli_query($connectdb1, $update_to_history);
//             if($dataupdate1){
//                 echo '';
//             }
//             else{
//                 echo '<script>alert("ERROR: failed to upload.");</script>';
//             }
//         }
//         else{
//             $insert_to_history="INSERT into jodi_single(id) value('1')";
//             $datainsert1 = mysqli_query($connectdb1, $insert_to_history);
//             if($datainsert1){
//                 echo '';
//             }
//             else{
//                 echo '<script>alert("ERROR: failed to upload.");</script>';
//             }
//             $update_to_history="UPDATE jodi_single SET date='$date',start_time='$start_time',AA='$aa',BB='$bb',CC='$cc',a='$a',b='$b',c='$c',end_time='$end_time' WHERE id=1";
        
//             $dataupdate1 = mysqli_query($connectdb1, $update_to_history);
//             if($dataupdate1){
//                 echo '';
//             }
//             else{
//                 echo '<script>alert("ERROR: failed to upload.");</script>';
//             }
//         }
//     }
//     else{

//     }
//     if (!$check_id) {
//         echo '';
//     }

    
// }
?>