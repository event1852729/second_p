<?php
include("packages_connect.php");
	
 $ID = $_POST['ID'];

if(!$seldb) die("資料庫選擇失敗!!");
        $sql = "delete from packages where ID='$ID'";
        if(mysqli_query($db_link,$sql))
        {
                echo '刪除成功!';
                
        }
        else
        {
                echo '刪除失敗!';
                
        }

?>
</body>
</html>


