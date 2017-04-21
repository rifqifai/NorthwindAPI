<?php include("koneksi.php") ?>
<?php include("header.php"); ?>
		<?php
            $edit_id = $_GET['edit'];
            $sql_select = "SELECT * FROM Employees WHERE EmployeeID='$edit_id'";
            $ret_select = $db->query($sql_select);

            while($rw=$ret_select->fetchArray(SQLITE3_ASSOC)){            
    ?>
	<form method="post" >
	<table cellpadding='2' cellspacing='0' border='0' class='table table-striped table-bordered' >
	
	<tr>
	<td>First Name</td><td><input type="text" name="FirstName" value="<?php echo $rw['FirstName']; ?>"></td></tr>
	<td>Last Name</td><td><input type="text" name="LastName" value="<?php echo $rw['LastName']; ?>"></td></tr>
	<td>Title</td><td><input type="text" name="Title" value="<?php echo $rw['Title']; ?>"></td></tr>
	<td>Title Of Courtesy</td><td><input type="text" name="TitleOfCourtesy" value="<?php echo $rw['TitleOfCourtesy']; ?>"></td></tr>
	<td>Home Phone</td><td><input type="text" name="HomePhone" value="<?php echo $rw['HomePhone']; ?>"></td></tr>
	<td>Address</td><td><input type="text" name="Address" value="<?php echo $rw['Address']; ?>"></td></tr>
	<td>City</td><td><input type="text" name="City" value="<?php echo $rw['City']; ?>"></td></tr>
	<td>Country</td><td><input type="text" name="Country" value="<?php echo $rw['Country']; ?>"></td></tr>
    </tr>
	<tr>
	<td><td>
	<button type='submit' class='btn btn-primary'>UPDATE</button>          
    </tr>
	</form>
	</table>
	<?php
        $postAll = array($_POST[FirstName],$_POST[LastName],$_POST[Title],$_POST[TitleOfCourtesy],$_POST[HomePhone],$_POST[Address],$_POST[City],$_POST[Country]);
        if($_POST[FirstName]){
            $sql_edit = "UPDATE Employees SET FirstName='$postAll[0]', LastName='$postAll[1]', Title='$postAll[2]', TitleOfCourtesy='$postAll[3]', HomePhone='$postAll[4]', Address='$postAll[5]', City='$postAll[6]', Country='$postAll[7]' WHERE EmployeeID = '$edit_id'";
            $ret_edit = $db->exec($sql_edit);
            if(!$ret_edit){
            echo $db->lastErrorMsg();
            }
            else{
                echo "<meta http-equiv='refresh' content='0; url=index.php' />";
            }
        }
    ?>
	<?php }; // END WHILE -SELECT- ?>
		</div>
	</div>
<?php include("footer.php"); ?>