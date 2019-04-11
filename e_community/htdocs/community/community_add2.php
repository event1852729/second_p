<?php
			include("community_connect.php");
			$cm_id = $_POST['cm_ID'];
			$cm_name = $_POST['cm_name'];
                                     $mem_ID = $_POST['mem_ID'];
                                     $email = $_POST['email'];

		


			$sql = "insert into community(cm_ID,cm_name,mem_ID,email) values 						('$cm_id'+1,'$cm_name','$mem_ID','$email')";
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
				
				}
			}
			echo "hi";

		?>


