<?php

if ($_SERVER['REQUEST_METHOD'] =='POST'){

    $account = $_POST['account'];
    $password = $_POST['password'];
    
    

    require_once 'member_connect.php';
	
	$sql = "SELECT * FROM member where account='$account'&& password ='$password'";
		if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
						 $date[] = $result;
				}
			}
echo json_encode($date,JSON_UNESCAPED_UNICODE) ;

}

?>
