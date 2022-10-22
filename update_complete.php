<?php
//update status in randdata table 

$update_status="UPDATE randdata SET `time` = '$end_time', `status`= 'completed' WHERE id = $id";
$status_data = mysqli_query($connectdb, $update_status);
if($status_data){
    echo '';
}   
else{
    echo '<script>alert("ERROR: failed to update status.");</script>';
}
?>