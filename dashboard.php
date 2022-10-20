<!-- /**
 * Author:    Rohan
 * Created:   21.10.2022
 * 
 * (c) Copyright by Dword Core.
 **/ -->
<?php require 'init.php'; ?>
<?php include 'head.php'; ?>
<body>
<?php include 'dashboard_navbar.php'; ?>
<h3>Random Numbers</h3>
<div class="table-responsive">
	
		<tbody>
			<?php
             	include("all_project.php");
				date_default_timezone_set('Asia/Kolkata');
				if (date('ha')== '09pm' || date('ha') == '10pm'|| date('ha') =='11pm' || date('ha') == '12am'|| date('ha') =='01am' || date('ha') =='02am' || date('ha') =='03am' || date('ha') =='04am' || date('ha') =='05am' || date('ha') =='06am' || date('ha') =='07am' || date('ha') == '08am') {
					$server='127.0.0.1';
					$username='root';
					$password='';
					$dbname= 'laxmi-lottery';
					$connectdb=mysqli_connect($server,$username,$password,$dbname);
					$result = mysqli_query($connectdb, "SELECT * FROM randdata");
					if (mysqli_num_rows($result)!=0){
						$number=1;
						while($number<49){
							$x = 2; //pair of two digits
							$aa  = substr(str_shuffle("0123456789"), 0, $x);
							$bb = substr(str_shuffle("2345678910"), 0, $x);
							$cc = substr(str_shuffle("2341056789"), 0, $x);
							$v1 = strval($aa);
							$v2 = strval($bb);
							$v3 = strval($cc);

							$a = $v1[strlen($v1) - 2];
							$b = $v2[strlen($v2) - 2];
							$c = $v3[strlen($v3) - 2];

							$time = '';
							$status = '';
							$sql = "UPDATE `randdata` SET `AA` = '$aa', `BB` = '$bb', `CC` = '$cc', `a` = '$a', `b` = '$b', `c` = '$c' WHERE `id` = $number";
							$dataupdate = mysqli_query($connectdb, $sql);
							if($dataupdate){
								$number=$number+1;
							}
						}
					}
				}
			?>
		</tbody>
	</table>
</div>

<?php include 'footer.php'; ?>