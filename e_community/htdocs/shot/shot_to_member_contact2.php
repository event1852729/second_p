<?php
			include("shot_connect.php");
			$cm_ID = $_POST['cm_ID'];
$my_ID = $_POST['my_ID'];
$my_name = $_POST['my_name'];
$my_birth = $_POST['my_birth'];
$my_like = $_POST['my_like'];
$my_call = $_POST['my_call'];
$her_ID = $_POST['her_ID'];
$her_name = $_POST['her_name'];
$her_birth = $_POST['her_birth'];
$her_like = $_POST['her_like'];
$her_call = $_POST['her_call'];


			
			$content = $_POST['content'];
			$sql = "insert into shot_contact(cm_ID,my_ID,my_name,my_birth,my_like,my_call,her_ID,her_name,her_birth,her_like,her_call) values 						('$cm_ID','$my_ID','$my_name','$my_birth','$my_like','$my_call','$her_ID','$her_name','$her_birth','$her_like','$her_call')";
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
				
				}
			}
			echo "hi";

		?>

