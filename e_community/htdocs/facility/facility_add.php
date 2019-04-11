<?php
			include("facility_connect.php");
			$fy_name = $_POST['fy_name'];
			$fy_date = $_POST['fy_date'];
	                          $fy_people = $_POST['fy_people'];
$cm_ID = $_POST['cm_ID'];

			$sql = "insert into facility (fy_name,fy_date,fy_people,cm_ID) values 						('$fy_name','$fy_date','$fy_people','$cm_ID')";
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
				
				}
			}
			echo "hi";

		?>