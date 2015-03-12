<?php

	require_once "email.class.php";
	//******************** 配置信息 ********************************
	$smtpserver = "smtp.163.com";//SMTP服务器
	$smtpserverport =25;//SMTP服务器端口
	$smtpusermail = "19940629cqc@163.com";//SMTP服务器的用户邮箱
	$smtpemailto = "cqc@cuiqingcai.com";//发送给谁
	$smtpuser = "19940629cqc";//SMTP服务器的用户帐号
	$smtppass = "940629CQC";//SMTP服务器的用户密码
	$mailtitle = $_POST['topic'];//邮件主题
	$mailcontent = "有人在您的个人CV页面给你留言啦<br>TA的名字: ".$_POST['name']."<br>TA的邮箱: ".$_POST['email']."<br>正文: ".$_POST['content'];//邮件内容
	$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
	//************************ 配置信息 ****************************
	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
	$smtp->debug = false;//是否显示发送的调试信息
	$state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);
	//返回值长度为0,发送失败
	if($state==""){
		echo 0;
	//返回有效信息，发送成功
	}else if(strlen($state)!=0){
		echo 1;
	//未知错误
	}else{
		echo 2;
	}
	
	

?>