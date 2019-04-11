<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
        $account = $_POST['account'];
		$name = $_POST['name'];
		$password = $_POST['password'];
		$location = $_POST['location'];
		$phone = $_POST['phone'];
        require_once('member.connect.php');

            $sql = "SELECT * FROM member WHERE account='$account' OR phone='$phone'";
            
            $check = mysqli_fetch_array(mysqli_query($con,$sql));
            
			$Response =Array();
			$Response["success"]=false;
            if(isset($check)){
                $Response["success"]=false;
            }else{                
                $sql = "INSERT INTO member (account,password,name,location,phone) VALUES('$account','$password','$name','$location','$phone')";
                if(mysqli_query($con,$sql)){
                  $Response["success"]=true;
                }else{
                  $Response["success"]=false;
                }
            }
            mysqli_close($con);
        }
		echo json_encode($Response);
}else{
echo 'error';
}