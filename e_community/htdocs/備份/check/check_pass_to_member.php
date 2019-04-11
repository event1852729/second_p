<?php

if ($_SERVER['REQUEST_METHOD'] =='POST'){

    $cm_ID = $_POST['cm_ID'];
	
	$level = $_POST['level'];
	$mem_ID = $_POST['mem_ID']; 
$cm_name = $_POST['cm_name'];    

    require_once 'member_connect.php';
$sql = "UPDATE member SET cm_ID='$cm_ID' ,  level='$level' , cm_name='$cm_name'  WHERE mem_ID='$mem_ID'";
	
	
		if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					
				}
			}
}




?>
