<?php
			include("community_connect.php");
			$cm_id = $_POST['cm_ID'];
			$cm_name = $_POST['cm_name'];
                                     $mem_ID = $_POST['mem_ID'];

		


			$sql = "insert into communityyy(cm_ID,cm_name,mem_ID) values 						('$cm_id','$cm_name','$mem_ID')";
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
				
				}
			}
			echo "hi";

		?>


