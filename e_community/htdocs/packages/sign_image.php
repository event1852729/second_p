<?php
			include("packages_connect.php");
				
         $pg_status = $_POST['pg_status'];
	$pg_ID = $_POST['pg_ID'];
$sign_image = $_POST['sign_image'];
$datetime = date ("Y-m-d H:i:s" , mktime(date('H')+7, date('i'), date('s'), date('m'), date('d'), date('Y'))) ;

 $a = md5(uniqid(rand()));
 $b = ".png";
 $c = "IMG";
$pg_path  = "uploads/$a$b";

$sql = "UPDATE package SET pg_status='$pg_status',pg_finish_date = '$datetime',sign_image='$a$b' WHERE pg_ID='$pg_ID'";


		
			if($stmt = $db->query($sql))
			{
				 file_put_contents($pg_path,base64_decode($sign_image));
				while($result = mysqli_fetch_object($stmt))
				{
					 $date[] = $result;

				}
			}
			echo json_encode($date,JSON_UNESCAPED_UNICODE);

		?>

