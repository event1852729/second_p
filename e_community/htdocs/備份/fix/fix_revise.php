
	<?php
			include("fix_connect.php");
				
                                $fix_status = $_POST['fix_status'];
	                    $fix_ID = $_POST['fix_ID'];


	$sql = "UPDATE fix SET fix_status='$fix_status'  WHERE fix_ID='$fix_ID'";
	
		
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					 $date[] = $result;

				}
			}
			echo json_encode($date,JSON_UNESCAPED_UNICODE);

		?>

		
		


