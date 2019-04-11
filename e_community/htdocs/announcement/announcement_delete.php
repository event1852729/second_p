
	<?php
			include("announcement_connect.php");

	$ID = $_POST['ID'];
	

	$sql = "DELETE from announcement where ID='$ID'";
	
		
		
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					 $date[] = $result;

				}
			}
			echo json_encode($date,JSON_UNESCAPED_UNICODE);

		?>

		
		








