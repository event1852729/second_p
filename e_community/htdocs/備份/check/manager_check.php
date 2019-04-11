<?php
			include("check_connect.php");
				
           $cm_ID = $_POST['cm_ID'];
	$mem_ID = $_POST['mem_ID'];
	$mem_name = $_POST['mem_name'];
            $mem_phone = $_POST['mem_phone'];
            $mem_location = $_POST['mem_location'];
            $check_status = $_POST['check_status'];

            $cm_name = $_POST['cm_name'];





		$sql = "insert into checks(cm_ID,mem_ID,mem_name,mem_phone,mem_location,check_status,cm_name) values 						('$cm_ID','$mem_ID','$mem_name','$mem_phone','$mem_location','$check_status','$cm_name')";



		
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					 $date[] = $result;

				}
			}
			echo json_encode($date,JSON_UNESCAPED_UNICODE);

		?>



