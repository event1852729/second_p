<?php
			include("packages_connect.php");
				
         $pg_status = $_POST['pg_status'];
	$pg_ID = $_POST['pg_ID'];


   

$datetime = date ("Y-m-d H:i:s" , mktime(date('H')+7, date('i'), date('s'), date('m'), date('d'), date('Y'))) 



	
$sql = "UPDATE package SET pg_status='$pg_status' WHERE pg_ID='$pg_ID'";

		
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					 $date[] = $result;

				}
			}
			echo json_encode($date,JSON_UNESCAPED_UNICODE);

		?>




