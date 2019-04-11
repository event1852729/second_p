
	<?php
			include("member_connect.php");
				$cm_ID = $_POST['cm_ID'];
         $mem_ID = $_POST['mem_ID'];
       $cm_name = $_POST['cm_name'];

	


	$sql = "UPDATE member SET cm_ID='$cm_ID'+1 , cm_name='$cm_name' , level=3 WHERE mem_ID='$mem_ID'";
	
		
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					 $date[] = $result;

				}
			}
			echo json_encode($date,JSON_UNESCAPED_UNICODE);

		?>

		
		



