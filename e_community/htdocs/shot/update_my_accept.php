
	<?php
			include("shot_connect.php");
			$my_accept= $_POST['my_accept'];
         			$st_ID = $_POST['st_ID'];
	                           $shot_status = $_POST['shot_status'];

	


	$sql = "UPDATE shot SET my_accept='$my_accept' , shot_status='$shot_status' WHERE st_ID='$st_ID'";
	
		
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					 $date[] = $result;

				}
			}
			echo json_encode($date,JSON_UNESCAPED_UNICODE);

		?>

		
		




