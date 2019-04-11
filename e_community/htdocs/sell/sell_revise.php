
	<?php
			include("sell_connect.php");
				$sl_title = $_POST['sl_title'];
         $sl_content = $_POST['sl_content'];
	$sl_ID = $_POST['sl_ID'];
$sl_call = $_POST['sl_call'];
		


	$sql = "UPDATE sell SET sl_content='$sl_content' ,  sl_title='$sl_title'  ,  sl_call='$sl_call'  WHERE sl_ID='$sl_ID'";
	
		
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					 $date[] = $result;

				}
			}
			echo json_encode($date,JSON_UNESCAPED_UNICODE);

		?>

		
		


