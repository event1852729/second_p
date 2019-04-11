<?php
			include("visitor_connect.php");
		
			$vs_name = $_POST['vs_name'];
			$vs_for = $_POST['vs_for'];
                                     $cm_ID = $_POST['cm_ID'];

			$sql = "insert into visitor (vs_name,vs_for,cm_ID) values 						('$vs_name','$vs_for','$cm_ID')";
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
				
				}
			}
			echo "hi";

		?>