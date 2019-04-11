<?php
			include("shot_connect.php");
			$my_birth = $_POST['my_birth'];			
			$my_like = $_POST['my_like'];
                                         $my_call = $_POST['my_call'];
                                         $mem_ID = $_POST['mem_ID'];
                                         $mem_name = $_POST['mem_name'];
                                         $cm_ID = $_POST['cm_ID'];
			$sql = "insert into register(my_birth,my_like,my_call,mem_ID,mem_name,cm_ID) values	('$my_birth','$my_like','$my_call','$mem_ID','$mem_name','$cm_ID')";
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
				
				}
			}
			echo "hi";

		?>
