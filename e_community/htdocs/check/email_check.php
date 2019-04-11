<?php
 header("Content-Type:text/html; charset=utf-8");
   $db_link = mysqli_connect("localhost", "root" , "");
    mysqli_query( $db_link  , "set names utf8");
   $seldb = @mysqli_select_db($db_link, "member");
   
	if (!$seldb) die("資料庫選擇失敗！");
	


$email = $_POST['email'];


	
       
	$sq = "SELECT * FROM member where  email ='$email'";

   
     $a = mysqli_query($db_link, $sq);

 

	while($row_result=mysqli_fetch_assoc($a)){
		foreach($row_result as $item=>$c){
			echo $item."=".$value."<br>";
		}
		echo "<hr />";
	}
	echo $c;
	
	if(isset($c))
	{
		     $to = $email; //收件者
             $subject = "e社趣加入社區通知!!"; //信件標題
             $msg = "親愛的".$name."您好\n"."您的加入社區申請已通過，請重新登入確認";//信件內容
             $headers = "From: workwork1144s@gmail.com"; //寄件者
  
             if(mail("$to", "$subject", "$msg", "$headers")){
             echo "信件已經發送成功。";//寄信成功就會顯示的提示訊息
			 }
             else{
             echo "信件發送失敗！";//寄信失敗顯示的錯誤訊息
             }
		
	}else{echo "無此住戶!!";}
		    
?>