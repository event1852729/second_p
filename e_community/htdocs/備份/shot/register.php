<?php
			include("shot_connect.php");
			$my_birth = $_POST['my_birth'];			
			$my_like = $_POST['my_like'];
                                         $my_call = $_POST['my_call'];
			$sql = "insert into register(my_birth,my_like,my_call) values 						('$my_birth','$my_like','$my_call')";
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
				
				}
			}
			echo "hi";

		?>
