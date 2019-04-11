<?php
			include("connect.php");
			$title = $_POST['title'];
			$date = $_POST['date'];
			$content = $_POST['content'];
			$sql = "insert into announcement (date,title,content) values 						('$date','$title','$content')";
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
				
				}
			}
			echo "hi";

		?>