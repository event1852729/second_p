<?php
			include("announcement_connect.php");
			$title = $_POST['title'];
			
			$content = $_POST['content'];
			$sql = "insert into announcement(title,content) values 						('$title','$content')";
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
				
				}
			}
			echo "hi";

		?>
