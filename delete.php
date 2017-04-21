<?php include("koneksi.php"); ?>
	<?php
	
	$del_id = $_GET[del];
	$sql_del = "DELETE FROM Employees WHERE EmployeeID='$del_id'";
	$ret_del = $db->exec($sql_del);

    if(!$ret_del){
    	echo $db->lastErrorMsg();
    }
    else{
        echo "<meta http-equiv='refresh' content='0; url=index.php' />";
    }
?>
