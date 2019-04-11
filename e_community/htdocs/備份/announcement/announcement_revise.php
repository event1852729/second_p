
	<?php
			include("announcement_connect.php");
				$title = $_POST['title'];
         $content = $_POST['content'];
	$ID = $_POST['ID'];
	


	$sql = "UPDATE announcement SET content='$content' ,  title='$title'  WHERE ID='$ID'";
	
		
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					 $date[] = $result;

				}
			}
			echo json_encode($date,JSON_UNESCAPED_UNICODE);

		?>

		
		


