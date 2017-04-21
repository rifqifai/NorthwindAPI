<?php include("koneksi.php") ?>
<?php include("header.php"); ?>
	<table><a href='insert.php'><button type='submit' class='btn btn-primary'>INSERT DATA</button></a> 
	</div></table></br>
	<table cellpadding='0' cellspacing='0' border='0' class='table table-striped table-bordered' >
	<tr><th>No</th>
	<th width="125">Name</th>
	<th>Title</th>
	<th>Title Of Courtesy</th>
	<th>Home Phone</th>
	<th>Address</th>
	<th>City</th>
	<th>Country</th>
	<th colspan="2" >Option</th></tr>
	<?php
							
                            $sql_select = "SELECT EmployeeID, FirstName||' '||LastName as Name,Title,TitleOfCourtesy,HomePhone,Address,City,Country FROM Employees ORDER BY EmployeeID ASC";
                            $ret_select = $db->query($sql_select);
                            $start_num = 0;

                            while($rw=$ret_select->fetchArray(SQLITE3_ASSOC)){
                                $start_num++;
                        ?>
						
	<tr>
                            <td><?php echo $start_num; ?></td>
                            <td><?php echo $rw[Name]; ?></td>
                            <td><?php echo $rw[Title]; ?></td>
                            <td><?php echo $rw[TitleOfCourtesy]; ?></td>
                            <td><?php echo $rw[HomePhone]; ?></td>
                            <td><?php echo $rw[Address]; ?></td>
                            <td><?php echo $rw[City]; ?></td>
                            <td><?php echo $rw[Country]; ?></td>

      
                            <td> <a class='btn btn-info btn-sm' href="edit.php?edit=<?php echo $rw['EmployeeID']; ?>" title="edit">Edit</a>
                            <a class='btn btn-danger btn-sm' href="delete.php?del=<?php echo $rw['EmployeeID']; ?>" title="delete">Delete</a>
                            </td>
    </tr>
	<?php };  ?>
	</table>
	
</div>
<?php include("footer.php"); ?>