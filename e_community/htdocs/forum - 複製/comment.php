
		<?php
			include("forum_connect.php");
			$forum_id = $_POST['forum_id'];
			$sql = "SELECT * FROM comment where ID=$forum_id ORDER BY cm_ID DESC";
		
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					 $date[] = $result;
				}
			}
			echo json_encode($date,JSON_UNESCAPED_UNICODE);
		?>

