<?php
			include("shot_connect.php");
	$her_birth = $_POST['her_birth'];			
			$her_like = $_POST['her_like'];
                                         $her_call = $_POST['her_call'];
                                         $her_name = $_POST['her_name'];
                                         $her_ID = $_POST['her_ID'];
			$my_birth = $_POST['my_birth'];			
			$my_like = $_POST['my_like'];
                                         $my_call = $_POST['my_call'];
                                         $my_name = $_POST['my_name'];
                                         $my_ID = $_POST['my_ID'];
                                         $cm_ID = $_POST['cm_ID'];
                                         $my_accept = $_POST['my_accept'];
                                         $her_accept = $_POST['her_accept'];
                                         $shot_status = $_POST['shot_status'];
                                         $today = $_POST['today'];
                                         $random_mem = $_POST['random_mem'];
			$sql = "insert into shot(my_birth,my_like,my_call,my_ID,my_name,cm_ID,her_ID,her_name,her_birth,her_like,her_call,my_accept,her_accept,shot_status,random_mem,today) values	('$my_birth','$my_like','$my_call','$my_ID','$my_name','$cm_ID','$her_ID','$her_name','$her_birth','$her_like','$her_call','$my_accept','$her_accept','$shot_status','$random_mem','$today')";
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
				
				}
			}
			echo "hi";

		?>

