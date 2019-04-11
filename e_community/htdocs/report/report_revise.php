
	<?php
			include("report_connect.php");
			
         $rp_status = $_POST['rp_status'];
	$rp_ID = $_POST['rp_ID'];
	


	$sql = "UPDATE report SET rp_status='$rp_status'  WHERE rp_ID='$rp_ID'";
	
		
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					 $date[] = $result;

				}
			}
			echo json_encode($date,JSON_UNESCAPED_UNICODE);

		?>

		
		


