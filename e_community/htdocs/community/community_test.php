<?php

include("community_connect.php");

$community_name = $_POST['cm_name'];


$DefaultId = 0;
$GetOldIdSQL ="SELECT count(cm_ID) FROM community";
 
 $Query = mysqli_query($con,$GetOldIdSQL);
 
while($row_result=mysqli_fetch_assoc($Query)){
		foreach($row_result as $item=>$value){
			echo $item."=".$value."<br>";
		}
		echo "<hr />";
	}
	$DefaultId = $value + 1;
	$community_id = "_".$DefaultId;
//?�斷帳�?密碼?�否?�空??
//確�?密碼輸入?�正確�?

      
      
        $sql = "insert into community (cm_ID,cm_name) values ('$DefaultId','$community_name')";
    
    if(mysqli_query($db_link,$sql))
        {
			
              echo '?��??��?!';
                
        }
        else
        {
                echo '?��?失�?!';
                
        }
		
		


//?�斷帳�?密碼?�否?�空??

?>
