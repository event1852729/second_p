<?php
			include("facility_connect.php");
			
                                      $fy_ID= $_POST['fy_ID'];
			$ay_date = $_POST['ay_date'];
	                          $ay_people = $_POST['ay_people'];
	                          $fy_name = $_POST['fy_name'];
$cm_ID = $_POST['cm_ID'];


			$sql = "insert into apply (ay_date,ay_people,fy_ID,fy_name,cm_ID) values 						('$ay_date','$ay_people','$fy_ID','$fy_name','$cm_ID')";
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
				
				}
			}
			echo "hi";

		?>