<?php
			include("member_connect.php");
				
         $cm_ID = $_POST['cm_ID'];
	$mem_ID = $_POST['mem_ID'];
	



$sql = "UPDATE member SET cm_ID='$cm_ID'  WHERE mem_ID='$mem_ID'";


		
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					 $date[] = $result;

				}
			}
			echo json_encode($date,JSON_UNESCAPED_UNICODE);

		?>

