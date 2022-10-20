<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php
$result = mysqli_query($connectdb, "SELECT AA,BB,CC,a,b,c FROM randdata WHERE id = $id");
if (!$result) {
    echo 'No DATA';
}
$row = mysqli_fetch_row($result);
$aa = $row[0];
$bb = $row[1];
$cc = $row[2];
$a = $row[3];
$b = $row[4];
$c = $row[5];
?>
<br>
<br>
<br>
<div class="container bg-secondary">
    <br>
    <div class="container d-flex justify-content-center">
        
        <table class="table  table-hover text-center h4 border border-dark border-5">
            <tr style="background-color:black;color:white;" class="my-5 ">
                <th>AA</th>
                <th>BB</th>
                <th>CC</th>
            </tr>
            <tr class="my-4 bg-light">
                <th>
                    <?php
                    echo $aa;
                    ?>
                </th>
                <th>
                    <?php
                    echo $bb;
                    ?>
                </th>
                <th>
                    <?php
                    echo $cc;

                    ?>
                </th>
            </tr>
        </table>
    </div>
    <br>
    <br>
    <br>
    <div class="container d-flex justify-content-center">
        <table class="table table-hover text-center h4 border border-dark border-5">
            <tr style="background-color:black;color:white">
                <th>A</th>
                <th>B</th>
                <th>C</th>
            </tr>
            <tr class="my-3 bg-light">
                <th>
                    <?php
                    echo $a;
                    ?>
                </th>
                <th>
                    <?php
                    echo $b;
                    ?>
                </th>
                <th>
                    <?php
                    echo $c;
                    ?>
                </th>
            </tr>

        </table>
    </div>
</div>
<br>