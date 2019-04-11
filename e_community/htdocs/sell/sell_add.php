<?php
			include("sell_connect.php");
	                  	$cm_ID = $_POST['cm_ID'];
                                           $mem_name = $_POST['mem_name'];
			$sl_title = $_POST['sl_title'];
			$sl_content = $_POST['sl_content'];
                                         $sl_call = $_POST['sl_call'];
                                         $sl_image= $_POST['sl_image'];

 $a = md5(uniqid(rand()));
 $b = ".png";
 $c = "IMG";
$sl_path  = "uploads/$a$b";


			$sql = "insert into sell (cm_ID,mem_name,sl_title,sl_content,sl_call,sl_image) values 						('$cm_ID','$mem_name','$sl_title','$sl_content','$sl_call','$a$b')";
			if($stmt = $db->query($sql))
			{
                                       file_put_contents($sl_path,base64_decode($sl_image));
				while($result = mysqli_fetch_object($stmt))
				{
				
				}
			}
			echo "hi";

		?>


