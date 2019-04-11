<?php
			include("forum_connect.php");
		
			$ID = $_POST['ID'];
			$cm_comment = $_POST['cm_comment'];

			$sql = "insert into comment(ID,cm_comment) values
 ('$ID','$cm_comment')";
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
				
				}
			}
			echo "hi";

		?>



