<?php

include("member_connect.php");
if ($_SERVER['REQUEST_METHOD'] =='POST'){

    $account = $_POST['account'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM member_table where username = '$id'";
    $result = mysql_query($sql);
    $row = @mysql_fetch_row($result);
if ( $row[1] == $account)
{
	echo '帳號重複，請洽管理員';
}
	 
else if($id != null && $pw != null && $pw2 != null && $pw == $pw2)
{


		//新增資料進資料庫語法
        $sql = "insert into member_table (username, password, telephone, address, other) values ('$id', '$pw', '$telephone', '$address', '$other')";
        if(mysql_query($sql))
        {
                echo '新增成功!';
            
        }
        else
        {
                echo '新增失敗!';
              
        }
}
else
{
        echo '註冊失敗!';
        
}
?>

?>