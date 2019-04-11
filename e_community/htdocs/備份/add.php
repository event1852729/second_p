
		<?php
			include("connect.php");

			$sql = "insert into students (dates,title,content) values ('123','123','123')";
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					 $date[] = $result;
				}
			}
			echo json_encode($date,JSON_UNESCAPED_UNICODE);

		?>

