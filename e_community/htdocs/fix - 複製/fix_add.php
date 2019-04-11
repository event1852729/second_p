<?php
			include("fix_connect.php");
			$fix_location = $_POST['fix_location'];
	                        $fix_item = $_POST['fix_item'];
	                        $fix_detail = $_POST['fix_detail'];
                                    $fix_image = $_POST['fix_image'];
                                    $cm_ID = $_POST['cm_ID'];
                                    $mem_ID = $_POST['mem_ID'];
                                    $mem_name = $_POST['mem_name'];
                                    $a = md5(uniqid(rand()));
                                    $b = ".png";
                                    $c = "IMG";
                                    $fix_path  = "uploads/$a$b";			
		
			$sql = "insert into fix(fix_location,fix_item,fix_detail,fix_image,cm_ID,mem_ID,mem_name) values 		('$fix_location','$fix_item','$fix_detail','$a$b','$cm_ID','$mem_ID','$mem_name')";
			if($stmt = $db->query($sql))
			{
                                               file_put_contents($fix_path,base64_decode($fix_image));
				while($result = mysqli_fetch_object($stmt))
				{
				
				}
			}
			echo "hi";

		?>
