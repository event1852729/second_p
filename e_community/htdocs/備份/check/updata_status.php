<?php
			include("check_connect.php");
			
	$mem_ID = $_POST['mem_ID'];





$sql = "UPDATE checks SET check_status='2' WHERE mem_ID='$mem_ID'";



		
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					 $date[] = $result;

				}
			}
	

		?>




