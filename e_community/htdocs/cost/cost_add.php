<?php
			include("cost_connect.php");
			$ct_m = $_POST['ct_m'];
	                           $ct_mgm = $_POST['ct_mgm'];
	                           $ct_car = $_POST['ct_car'];
$cm_ID = $_POST['cm_ID'];
			
		
			$sql = "insert into cost(ct_m,ct_mgm,ct_car,cm_ID) values 						('$ct_m','$ct_mgm','$ct_car','$cm_ID')";
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
				
				}
			}
			echo "hi";

		?>
