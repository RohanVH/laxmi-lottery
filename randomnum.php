
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>random numbers jodi/single</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<?php
$x=2;

?>
<br>
<br>
<br>
<br>
<div class="container d-flex justify-content-center">
    
    <table class="table  table-hover text-center">
        <tr style="background-color:black;color:white">
            <th>AA</th>
            <th>BB</th>
            <th>CC</th>
        </tr>
        <tr>
            <th>
                <?php 
    
                    $aa  = substr(str_shuffle("0123456789"), 0, $x);
                    echo $aa;
                ?>
            </th>
            <th>
                <?php 
                    $bb = substr(str_shuffle("2345678910"), 0, $x);
                    echo $bb;
                ?>
            </th>
            <th>
                <?php 
                    $cc = substr(str_shuffle("2341056789"), 0, $x);
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
    <table class="table  table-hover text-center">
        <tr style="background-color:black;color:white">
            <th>A</th>
            <th>B</th>
            <th>C</th>
        </tr>
        <tr>
            <th>
                <?php
                    $a=strval($aa); 
                    echo $a[strlen($a)-2];
                ?>
            </th>
            <th>
                <?php 
                    $b=strval($bb);
                    echo $b[strlen($b)-2];
                ?>
            </th>
            <th>
                <?php 
                    $c=strval($cc);
                    echo $c[strlen($c)-2];
                ?>
            </th>
        </tr>
        
    </table>
</div>

</body>
</html>


