<div class="container">
        <label for="" class="h2 text-start">Results:</label><br>
        <p>
            <a class="btn btn-danger" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Jodi</a>
            <button class="btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Single</button>
            <button class="btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Both</button>
        </p>
        <div class="row">
            <!-- jodi -->
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card card-body">
                <?php
                include_once('config.php');
                $get_status="SELECT `time`,`AA`,`BB`,`CC` from randdata where `status`='completed'";
                $query=mysqli_query($connectdb,$get_status);
                $rows=mysqli_fetch_row($query);
                ?>
                    <p><center>JODI</center></p>
                    <table class="table  table-hover text-center h4 border border-dark border-5">
                        <tr style="background-color:black;color:white;" class="my-5 ">
                            <th>time</th>
                            <th>AA</th>
                            <th>BB</th>
                            <th>CC</th>
                            <!-- <th>status</th> -->
                        </tr>
                <?php
                    if ($rows > 0) 
                    {
                        // OUTPUT DATA OF EACH ROW
                        $n=1;
                        while($row = $query->fetch_assoc())
                        {

                        echo '<tr class="my-4 bg-light"><td>'.$time = $row['time'].'</td>';
                        echo '<td>'.$aa = $row['AA'].'</td>';
                        echo '<td>'.$bb = $row['BB'].'</td>';
                        echo '<td>'.$cc = $row['CC'].'</td>';
                        $n=$n+1;
                        // echo '<td>'.$status = $row['status'].'</td></tr>';
                        }}
                    ?>
                        
                    </table>
                <?php
                    
                    
                ?>
                </div>
                </div>
            </div>
            <!-- single -->
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                    <div class="card card-body">
                    <?php
                        $get_status="SELECT `time`,`a`,`b`,`c` from randdata where `status`='completed'";
                        $query=mysqli_query($connectdb,$get_status);
                        $rows=mysqli_fetch_row($query);
                        ?>
                            <p><center>SINGLE</center></p>
                            <table class="table  table-hover text-center h4 border border-dark border-5">
                                <tr style="background-color:black;color:white;" class="my-5 ">
                                    <th>time</th>
                                    <th>AA</th>
                                    <th>BB</th>
                                    <th>CC</th>
                                    <!-- <th>status</th> -->
                                </tr>
                        <?php
                            if ($rows > 0) 
                            {
                                // OUTPUT DATA OF EACH ROW
                                while($row = $query->fetch_assoc())
                                {
                                echo '<tr class="my-4 bg-light"><td>'.$time = $row['time'].'</td>';
                                echo '<td>'.$aa = $row['a'].'</td>';
                                echo '<td>'.$bb = $row['b'].'</td>';
                                echo '<td>'.$cc = $row['c'].'</td>';
                                // echo '<td>'.$status = $row['status'].'</td></tr>';
                                }
                            }
                            ?>
                                
                            </table>
                        <?php
                            
                            
                        ?>
                    </div>
                </div>
            </div>
        </div>
        
    </div>