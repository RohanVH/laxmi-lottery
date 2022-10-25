<div class="container bg-dark d-flex justify-content-center " style="border-radius: 0 0 50px 50px;">

    <label for="" class=" h2 text-start">Results:</label><br>
    <p class="my-4">
        <a class="btn btn-danger btn-lg" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Jodi</a>
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Single</button>
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Both</button>
    </p>
    <div class="row">
        <!-- jodi -->
        <div class="col my-5">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card card-body border border-dark" style="border-radius: 20px;" id="table">
                    <?php
                    include_once('config.php');
                    $get_status = "SELECT `time`,`AA`,`BB`,`CC`,`date` from randdata where `status`='completed'";
                    $query = mysqli_query($connectdb, $get_status);
                    $rows = mysqli_fetch_row($query);
                    ?>
                    <div class="bg-light text-danger text-center" style="position: sticky; top: 0; ">
                        <span class="h3 my-3">JODI</span>
                    </div>
                    <table class="table  table-hover text-center h4 border border-dark border-5">
                        <tr style="background-color:black;color:white;" class="my-5 ">
                            <th><span class="btn btn-lg btn-outline-danger border-dark h5">DATE</span></th>
                            <th>TIME</th>
                            <th>AA</th>
                            <th>BB</th>
                            <th>CC</th>
                        </tr>
                        <?php
                        if ($rows > 0) {
                            // OUTPUT DATA OF EACH ROW
                            $n = 1;
                            while ($row = $query->fetch_assoc()) {

                                echo '<tr class="my-4 bg-light"><td width="20%" style="color:green;background-color:black">' . '⏱️' . $date = $row['date'] . '</td>';
                                echo '<td width="10%" style="color:white;background-color:black">' . $time = $row['time'] . '</td>';
                                echo '<td width="10%">' . $aa = $row['AA'] . '</td>';
                                echo '<td width="10%">' . $bb = $row['BB'] . '</td>';
                                echo '<td width="10%">' . $cc = $row['CC'] . '</td>';
                                $n = $n + 1;
                            }
                        }
                        ?>
                        <style>
                            #table {
                                height: 700px;
                                border: 25px;
                                padding: 20px;
                                overflow: auto;
                            }
                        </style>

                    </table>
                    <?php


                    ?>
                </div>
            </div>
        </div>
        <!-- single -->
        <div class="col my-5">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
                <div class="card card-body border border-dark" style="border-radius: 20px;" id="table">
                    <?php
                    $get_status = "SELECT `time`,`a`,`b`,`c`,`date` from randdata where `status`='completed'";
                    $query = mysqli_query($connectdb, $get_status);
                    $rows = mysqli_fetch_row($query);
                    ?>
                    <div class="bg-light text-danger text-center" style="position: sticky; top: 0; ">
                        <span class="h3 my-3">SINGLE</span>
                    </div>
                    <table class=" table table-hover text-center h4 border border-dark border-5">
                        <tr style="background-color:black;color:white;" class="my-5 ">
                            <th><span class="btn btn-lg btn-outline-danger border-dark h5">DATE</span></th>
                            <th>time</th>
                            <th>AA</th>
                            <th>BB</th>
                            <th>CC</th>
                        </tr>
                        <?php
                        if ($rows > 0) {
                            // OUTPUT DATA OF EACH ROW
                            while ($row = $query->fetch_assoc()) {
                                echo '<tr class="my-4 bg-light"><td width="20%" style="color:green;background-color:black">' . '⏱️' . $date = $row['date'] . '</td>';
                                echo '<td width="10%" style="color:white;background-color:black">' . $time = $row['time'] . '</td>';
                                echo '<td width="10%">' . $aa = $row['a'] . '</td>';
                                echo '<td width="10%">' . $bb = $row['b'] . '</td>';
                                echo '<td width="10%">' . $cc = $row['c'] . '</td>';
                            }
                        }
                        ?>
                        <style>
                            #table {
                                height: 700px;
                                border: 25px;
                                padding: 20px;
                                overflow: auto;
                            }
                        </style>
                    </table>
                    <?php


                    ?>
                </div>
            </div>
        </div>
    </div>


</div>
<br>
<br>
<br>