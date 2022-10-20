
 <br>
 <br>
 <br>
 <br>
 <div class="container d-flex justify-content-center">

     <table class="table  table-hover text-center h4">
         <tr style="background-color:black;color:white;" class="my-5 ">
             <th>AA</th>
             <th>BB</th>
             <th>CC</th>
         </tr>
         <tr class="my-4 ">
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
     <table class="table  table-hover text-center h4">
         <tr style="background-color:black;color:white">
             <th>A</th>
             <th>B</th>
             <th>C</th>
         </tr>
         <tr class="my-3">
             <th>
                 <?php
                    $a = strval($aa);
                    echo $a[strlen($a) - 2];
                    ?>
             </th>
             <th>
                 <?php
                    $b = strval($bb);
                    echo $b[strlen($b) - 2];
                    ?>
             </th>
             <th>
                 <?php
                    $c = strval($cc);
                    echo $c[strlen($c) - 2];
                    ?>
             </th>
         </tr>

     </table>
 </div>

 </body>

 </html>