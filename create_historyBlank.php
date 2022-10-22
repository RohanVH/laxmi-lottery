<?php
// creating 48 empty rows in history table
$number=1;
while($number<49){
        $insert_blank = "INSERT INTO history Values('','-','-','-','-','-','-','-','-','-')"; //insert blank values
        $inserting = mysqli_query($connectdb, $insert_blank);
        if ($inserting) {
            echo '';
    }
    $number=$number+1;
}
?>