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
             	include("all_history.php");
				
			?>
		</tbody>
	</table>
</div>

<?php include 'footer.php'; ?>