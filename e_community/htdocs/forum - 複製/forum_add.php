<?php
			include("forum_connect.php");
			$title = $_POST['title'];			
			$content = $_POST['content'];
$cm_ID = $_POST['cm_ID'];
$mem_name = $_POST['mem_name'];
			$sql = "insert into forum(title,content,cm_ID,mem_name) values 						('$title','$content','$cm_ID','$mem_name')";
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
				
				}
			}
			echo "hi";

		?>

