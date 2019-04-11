<?php
			include("forum_connect.php");

	$cm_ID = $_POST['cm_ID'];
	

	$sql = "DELETE from comment where cm_ID='$cm_ID'";
	
		
		
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					 $date[] = $result;

				}
			}
			echo json_encode($date,JSON_UNESCAPED_UNICODE);

		?>
