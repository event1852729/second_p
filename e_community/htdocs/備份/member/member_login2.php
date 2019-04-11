<?php

if ($_SERVER['REQUEST_METHOD'] =='POST'){

    $account = $_POST['account'];
	$name = $_POST['name'];
    $password = $_POST['password'];
    $location = $_POST['location'];
	$phone = $_POST['phone'];
    

    require_once 'member_connect.php';
		 $sql = "SELECT * FROM member where account ='$account' && password ='$password'";
	
		if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					
				}
			}
}




?>