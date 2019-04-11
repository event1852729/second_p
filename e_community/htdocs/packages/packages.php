<?php
			include("packages_connect.php");		
	$mem_ID = $_POST['mem_ID'];

			$sql = "SELECT * FROM package where mem_ID='$mem_ID'";

			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					 $date[] = $result;
				}
			}
			echo json_encode($date,JSON_UNESCAPED_UNICODE);
		?>