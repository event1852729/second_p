<?php
			include("forum_connect.php");
		
			$cm_ID = $_POST['cm_ID'];
			$report_title = $_POST['report_title'];
	                       $report_content = $_POST['report_content'];
                                   $mem_name = $_POST['mem_name'];

			$sql = "insert into cmreport(cm_ID,mem_name,report_title,report_content) values
 ('$cm_ID','$mem_name','$report_title','$report_content')";
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
				
				}
			}
			echo "hi";

		?>



