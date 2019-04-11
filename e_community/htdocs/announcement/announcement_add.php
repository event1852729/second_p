<?php
			include("announcement_connect.php");
			$title = $_POST['title'];
$cm_ID = $_POST['cm_ID'];

			
			$content = $_POST['content'];
			$sql = "insert into announcement(title,content,cm_ID) values 						('$title','$content','$cm_ID')";
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
				
				}
			}
			echo "hi";

		?>
