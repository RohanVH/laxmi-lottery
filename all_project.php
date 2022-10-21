<table class="table table-bordered table-hover project_table">
	<thead>
		<tr style="color:white;background-color:black;">
		<th>ID</th>
			<th>AA</th>
			<th>BB</th>
			<th>CC</th>
      		<th>A</th>
			<th>B</th>
			<th>C</th>
			<th style="display:flex;justify-content:center;">Options</th>
		</tr>
	</thead>
	<tbody>
		<?php
           $query = $db->query("SELECT * FROM randdata");
             $rows = $query->fetchAll(PDO::FETCH_OBJ);
             foreach($rows as $row){
				$id = $row->id;
				$AA = $row->AA;
				$BB = $row->BB;
				$CC = $row->CC;
				$A = $row->a;
				$B = $row->b;
				$C = $row->c;
        ?>
             <tr>
			 	<td><?php echo $id; ?></td>
             	<td><?php echo $AA; ?></td>
             	<td><?php echo $BB; ?></td>
                <td><?php echo $CC; ?></td>
                <td><?php echo $A; ?></td>
                <td><?php echo $B; ?></td>
                <td><?php echo $C; ?></td>
             	</td>
             	<td style="display:flex;justify-content:center;">
             		  <a class="btn btn-xs btn-danger" onclick="return confirm('Are you sure you want to delete? ')" href="deleteproject.php?id=<?php echo $row->id; ?>"><i class="fa fa-trash"></i></a>
             	</td>
             </tr>
        <?php
           }
		?>
	</tbody>
</table>