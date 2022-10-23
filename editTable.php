<?php 

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "laxmi-lottery"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 	die("Connection failed: " . mysqli_connect_error());
}
?>

<!doctype html>
<html>
    <head>
        <title>Admin:: editTable</title>
        <link href='style_table.css' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src='tableeditor.js' type='text/javascript'></script>
    </head>
    <body style="background-color:grey;">
        
        <div class='container'>
            
            <table width='100%' border='0'>
                <tr>
                    <th width='10%'>ID</th>
                    <th width='10%'>Time</th>
                    <th width='20%'>AA</th>
                    <th width='20%'>BB</th>
                    <th width='20%'>CC</th>
                    <th width='10%'>A</th>
                    <th width='10%'>B</th>
                    <th width='10%'>C</th>
                    <th width='10%'>Status</th>
                </tr>
            <?php 
                $query = "select * from randdata";
                $result = mysqli_query($con,$query);
                $count = 1;
                while($row = mysqli_fetch_array($result) ){
                    $id = $row['id'];
                    $time = $row['time'];
                    $AA = $row['AA'];
                    $BB = $row['BB'];
                    $CC = $row['CC'];
                    $a = $row['a'];
                    $b = $row['b'];
                    $c = $row['c'];
                    $status = $row['status'];
            ?>
                    <tr>
                        <td style="display:flex;justify-content:center;"><?php echo $count; ?></td>
                        <td> <div style="display:flex;justify-content:center;" contentEditable='true' class='edit' id='AA_<?php echo $id; ?>'> <?php echo $time; ?></div> </td>
                        <td> <div style="display:flex;justify-content:center;" contentEditable='true' class='edit' id='AA_<?php echo $id; ?>'> <?php echo $AA; ?></div> </td>
                        <td> <div style="display:flex;justify-content:center;" contentEditable='true' class='edit' id='BB_<?php echo $id; ?>'><?php echo $BB; ?> </div> </td>
                        <td> <div style="display:flex;justify-content:center;" contentEditable='true' class='edit' id='CC_<?php echo $id; ?>'><?php echo $CC; ?> </div> </td>
                        <td> <div style="display:flex;justify-content:center;" contentEditable='true' class='edit' id='a_<?php echo $id; ?>'><?php echo $a; ?> </div> </td>
                        <td> <div style="display:flex;justify-content:center;" contentEditable='true' class='edit' id='b_<?php echo $id; ?>'><?php echo $b; ?> </div> </td>
                        <td> <div style="display:flex;justify-content:center;" contentEditable='true' class='edit' id='c_<?php echo $id; ?>'><?php echo $c; ?> </div> </td>
                        <td> <div style="display:flex;justify-content:center;" contentEditable='true' class='edit' id='c_<?php echo $id; ?>'><?php echo $status; ?> </div> </td>
                    </tr>
            <?php
                    $count ++;
                }
            ?>  
            </table>
             
        </div>    

    </body>
</html>