<?php

include("packages_connect.php");
$pg_own= $_POST['pg_own'];
$pg_location= $_POST['pg_location'];
$pg_image = $_POST['pg_image'];
 $a = md5(uniqid(rand()));
 $b = ".png";
 $c = "IMG";
$pg_path  = "uploads/$a$b";
 $sql = "insert into package (pg_own,pg_location,pg_image) values ('$pg_own','$pg_location','$a$b')";

    	if($stmt = $db->query($sql))
			{
				 file_put_contents($pg_path,base64_decode($pg_image));
				while($result = mysqli_fetch_object($stmt))
				{
				
				}
			}
?>
