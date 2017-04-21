<?php include("koneksi.php") ?>
<?php include("header.php"); ?>
	<form method="post">
		<table cellpadding='0' cellspacing='0' border='0' class='table table-striped table-bordered' >
		<tr> 
			<td>First Name</td> 
			<td><input type='text' name='FirstName' maxlength='25'> </td>
		</tr>
		<tr> 
			<td>Last Name</td> 
			<td><input type='text' name='LastName'> </td>
		</tr>
		<tr>
			<td>Title</td> 
			<td><input type='text' name='Title'>
			</td>
		</tr>
		<tr>
			<td>Title Of Courtesy</td> 
			<td><input type='text' name='TitleOfCourtesy'>
			</td>
		</tr>
		<tr> 
			<td>Home Phone</td> 
			<td><input type='text' name='HomePhone'>
			</td> 
		</tr>
		<tr> 
			<td>Address</td> 
			<td><input type='text' name='Address'>
			</td> 
		</tr>
			<td>City</td> 
			<td><input type='text' name='City'>
			</td>
		</tr>
		<tr> 
			<td>Country</td> 
			<td><input type='text' name='Country'>
			</td> 
		</tr>
		<tr>
		<tr><td></td><td><button type='submit' class='btn btn-primary'>INSERT</button> 
			<button type='reset' class='btn btn-danger btn-sm'>RESET</button></td></tr>
		</tr>	
		</table>
	</form>

<?php
        $postAll = array($_POST[FirstName],$_POST[LastName],$_POST[Title],$_POST[TitleOfCourtesy],$_POST[HomePhone],$_POST[Address],$_POST[City],$_POST[Country]);
        if($_POST[FirstName]){
            $sql_post = "INSERT INTO Employees(FirstName, LastName, Title,TitleOfCourtesy,HomePhone,Address,City,Country) VALUES ('$postAll[0]','$postAll[1]','$postAll[2]','$postAll[3]','$postAll[4]','$postAll[5]','$postAll[6]','$postAll[7]')";
            $ret_post = $db->exec($sql_post);
            if(!$ret_post){
            echo $db->lastErrorMsg();
            }
            else{
                echo "<meta http-equiv='refresh' content='0; url=index.php' />";
            }
        }
    ?>
</div>
</div> 
<?php include("footer.php"); ?>

    