<?php
			include("report_connect.php");
			$rp_item = $_POST['rp_item'];		
			$rp_detail = $_POST['rp_detail'];
                                    $rp_image = $_POST['rp_image'];
$cm_ID = $_POST['cm_ID'];
                                    $a = md5(uniqid(rand()));
                                    $b = ".png";
                                    $c = "IMG";
                                    $rp_path  = "uploads/$a$b";

			$sql = "insert into report (rp_item,rp_detail,rp_image,cm_ID)values 						('$rp_item','$rp_detail','$a$b','$cm_ID')";
			if($stmt = $db->query($sql))
			{
	                                file_put_contents($rp_path,base64_decode($rp_image));
				while($result = mysqli_fetch_object($stmt))
				{
				
				}
			}
			echo "hi";

		?>