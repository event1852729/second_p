<?php
			include("forum_connect.php");
		
			$ID = $_POST['ID'];
			$cm_comment = $_POST['cm_comment'];
                                    $mem_name = $_POST['mem_name'];

			$sql = "insert into comment(ID,cm_comment,mem_name) values
 ('$ID','$cm_comment','$mem_name')";
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
				
				}
			}
			echo "hi";

		?>



