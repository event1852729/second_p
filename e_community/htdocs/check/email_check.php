<?php
 header("Content-Type:text/html; charset=utf-8");
   $db_link = mysqli_connect("localhost", "root" , "");
    mysqli_query( $db_link  , "set names utf8");
   $seldb = @mysqli_select_db($db_link, "member");
   
	if (!$seldb) die("��Ʈw��ܥ��ѡI");
	


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
		     $to = $email; //�����
             $subject = "e����[�J���ϳq��!!"; //�H����D
             $msg = "�˷R��".$name."�z�n\n"."�z���[�J���ϥӽФw�q�L�A�Э��s�n�J�T�{";//�H�󤺮e
             $headers = "From: workwork1144s@gmail.com"; //�H���
  
             if(mail("$to", "$subject", "$msg", "$headers")){
             echo "�H��w�g�o�e���\�C";//�H�H���\�N�|��ܪ����ܰT��
			 }
             else{
             echo "�H��o�e���ѡI";//�H�H������ܪ����~�T��
             }
		
	}else{echo "�L�����!!";}
		    
?>