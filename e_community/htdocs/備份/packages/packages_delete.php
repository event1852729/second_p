<?php
include("packages_connect.php");
	
 $ID = $_POST['ID'];

if(!$seldb) die("��Ʈw��ܥ���!!");
        $sql = "delete from packages where ID='$ID'";
        if(mysqli_query($db_link,$sql))
        {
                echo '�R�����\!';
                
        }
        else
        {
                echo '�R������!';
                
        }

?>
</body>
</html>


