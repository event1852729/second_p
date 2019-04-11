
	<?php
			include("shot_connect.php");
			$her_accept= $_POST['her_accept'];
         			$st_ID = $_POST['st_ID'];
			$shot_status = $_POST['shot_status'];


	


	$sql = "UPDATE shot SET her_accept='$her_accept' , shot_status='$shot_status'  WHERE st_ID='$st_ID'";
	
		
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					 $date[] = $result;

				}
			}
			echo json_encode($date,JSON_UNESCAPED_UNICODE);

		?>

		
		



