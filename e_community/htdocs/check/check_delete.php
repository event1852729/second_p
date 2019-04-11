
	<?php
			include("check_connect.php");

	                        $mem_ID = $_POST['mem_ID'];
	

	                        $sql = "DELETE from checks where mem_ID='$mem_ID'";
	
		
		
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					 $date[] = $result;

				}
			}
			echo json_encode($date,JSON_UNESCAPED_UNICODE);

		?>

		
		








