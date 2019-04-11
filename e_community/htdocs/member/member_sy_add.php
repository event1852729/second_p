
		<?php
			include("member_connect.php");
			
			$account = $_POST['account'];
	$name = $_POST['name'];
    $password = $_POST['password'];
    $location = $_POST['location'];
	$phone = $_POST['phone'];
	$level = $_POST['level'];
	$cm_ID = $_POST['cm_ID'];
	$email = $_POST['email'];


			$sql = "INSERT INTO member(cm_ID,account,name,password,location,phone,level,email) VALUES ('$cm_ID','$account', '$name', '$password','$location','$phone','$level','$email')";

			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					 $date[] = $result;
				}
			}
			echo json_encode($date,JSON_UNESCAPED_UNICODE);
		?>

