
	<?php
			include("fix_connect.php");

	$fix_ID = $_POST['fix_ID'];
	

	$sql = "DELETE from fix where fix_ID='$fix_ID'";
	
		
		
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					 $date[] = $result;

				}
			}
			echo json_encode($date,JSON_UNESCAPED_UNICODE);

		?>

		
		








