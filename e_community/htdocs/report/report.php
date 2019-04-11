<?php
			include("report_connect.php");
$cm_ID = $_POST['cm_ID'];
$mem_ID = $_POST['mem_ID'];


			
			$sql = "SELECT * FROM report where mem_id='$mem_ID' and   cm_id='$cm_ID'";

			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					 $date[] = $result;
				}
			}
			echo json_encode($date,JSON_UNESCAPED_UNICODE);
		?>