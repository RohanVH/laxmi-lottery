<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
</head>
<body>
    <div class="container">
        <br>
        <?php include('searchhistory.php');?>
        <br>
        <table class="table table-hover">
            <tr class="table-dark">
                <th>Date</th>
                <th>Time</th>
                <th>AA</th>
                <th>BB</th>
                <th>CC</th>
                <th>A</th>
                <th>B</th>
                <th>C</th>
            </tr>
        <?php 
        include_once("config.php");
        date_default_timezone_set('Asia/Kolkata');
        $date = date('d/m/Y');

        $query = "select * from history where date='$date'";
        $result = mysqli_query($connectdb, $query);
        $count = 1;

        while ($row = mysqli_fetch_array($result)) {

            $time = $row['time'];
            $date = $row['date'];
            $AA = $row['AA'];
            $BB = $row['BB'];
            $CC = $row['CC'];
            $A = $row['a'];
            $B = $row['b'];
            $C = $row['c'];
        ?>
         <tr class="table-secondary">
                        <td class="font-weight-bold"><?php echo "$date"; ?></td>
                        <td class="font-weight-bold"><?php echo "$time"; ?></td>
                        <td class="font-weight-bold"><?php echo "$AA"; ?></td>
                        <td class="font-weight-bold"><?php echo "$BB"; ?></td>
                        <td class="font-weight-bold"><?php echo "$CC"; ?></td>
                        <td class="font-weight-bold"><?php echo "$A"; ?></td>
                        <td class="font-weight-bold"><?php echo "$B"; ?></td>
                        <td class="font-weight-bold"><?php echo "$C"; ?></td>
                    </tr>
            <?php
                    $count++;
                }
           
            ?>
        </table>
    </div>

</body>
</html>