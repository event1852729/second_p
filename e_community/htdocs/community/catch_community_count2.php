
		<?php
			include("community_connect.php");
			
			$sql = "SELECT count(*) FROM communityyy";
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					 $date[] = $result;
				}
			}
			echo json_encode($date,JSON_UNESCAPED_UNICODE);
		?>

