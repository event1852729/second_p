<?php
			include("community_connect.php");
			$cm_id = $_POST['cm_id'];
			
			$cm_name = $_POST['cm_name'];
			$sql = "insert into community(cm_id,cm_name) values 						('$cm_id','$cm_name')";
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
				
				}
			}
			echo "hi";

		?>
