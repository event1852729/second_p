<?php

if ($_SERVER['REQUEST_METHOD'] =='POST'){

    $account = $_POST['account'];
	$name = $_POST['name'];
    $password = $_POST['password'];
    $location = $_POST['location'];
	$phone = $_POST['phone'];
	$level = $_POST['level'];
	$cm_ID = $_POST['cm_ID'];
	$email = $_POST['email'];
	$cm_name = $_POST['cm_name'];
    

    require_once 'member_connect.php';

if($level ==1){
	 $sql = "INSERT INTO member(account,name,password,location,phone,level,email) VALUES ('$account', '$name', '$password','$location','$phone','$level','$email')";
}else{
	$sql = "INSERT INTO member(cm_ID,account,name,password,location,phone,level,email,cm_name) VALUES ('$cm_ID','$account', '$name', '$password','$location','$phone','$level','$email','$cm_name')";

}
		 #$sql = "INSERT INTO member(account,name,password,location,phone,level,email) #VALUES ('$account', '$name', '$password','$location','$phone','$level','$email')";
	
		if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					
				}
			}
}




?>
