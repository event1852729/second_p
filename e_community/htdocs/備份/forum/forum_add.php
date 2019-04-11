<?php
			include("forum_connect.php");
			$title = $_POST['title'];			
			$content = $_POST['content'];
$cm_ID = $_POST['cm_ID'];
			$sql = "insert into forum(title,content,cm_ID) values 						('$title','$content','$cm_ID')";
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
				
				}
			}
			echo "hi";

		?>

